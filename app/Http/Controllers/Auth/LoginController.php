<?php

namespace App\Http\Controllers\Auth;

use App\Models\Extension;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Models\UserLogin;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();

    }

    public function showLoginForm()
    {
        $pageTitle = "Sign In";
        $users = User::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();

        return view(activeTemplate() . 'user.auth.login', compact('pageTitle', 'users'));
    }

    public function login(Request $request)
    {


        $this->validateLogin($request);
        if(isset($request->captcha)){
            if(!captchaVerify($request->captcha, $request->captcha_secret)){
                $notify[] = ['error',"Invalid captcha"];
                return back()->withNotify($notify)->withInput();
            }
        }
        $users = User::where('username',$request->input("username"))->orderBy('id', 'DESC')->limit(6)->get();

        if ( $users[0]['status'] == 0 ) {
            $this->guard()->logout();
            $notify[] = ['error','Your account has been deactivated.'];
            return redirect()->route('user.login')->withNotify($notify);
        }

        if ( auth()->attempt(['username' => $request->input("username"), 'password' => $request->password])   ) {
            //  notify ()->success('  ');
            $notify[] = ['بنجاح', 'تم الدخول بنجاح.'];
            return redirect()->route('user.home')->withNotify($notify);


           // return redirect() -> route('admin.dashboard');
        }
//        $user = auth()->user();
////        $user=  User::find(Auth::user()->id)->role()->first();
//
//        $role_id= $user->pivot->role_id;
//
//        if($role_id=="2")
//        {
//            return view('front.dashboard');
//        }
//        elseif($role_id=='1')
//        {
//            return view('auction.admin.dashboard');
//        }
//        else{
//            return view('home');
//        }


    }

    public function findUsername()
    {
        $login = request()->input('username');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    protected function validateLogin(Request $request)
    {
        $customRecaptcha = Extension::where('act', 'custom-captcha')->where('status', 1)->first();
        $validation_rule = [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ];

        if ($customRecaptcha) {
            $validation_rule['captcha'] = 'required';
        }

        $request->validate($validation_rule);

    }

    public function logout()
    {
        $this->guard()->logout();

        request()->session()->invalidate();

        $notify[] = ['success', 'You have been logged out.'];
        return redirect()->route('user.login')->withNotify($notify);
    }





    public function authenticated( $user)
    {

        if ($user->status == 0) {
            $this->guard()->logout();
            $notify[] = ['error','Your account has been deactivated.'];
            return redirect()->route('user.login')->withNotify($notify);
        }


//        $user = auth()->user();
//        $user->status = $user->ts == 1 ? 0 : 1;
//        $user->save();
        $ip = $_SERVER["REMOTE_ADDR"];
        $exist = UserLogin::where('user_ip',$ip)->first();
        $userLogin = new UserLogin();
        if ($exist) {
            $userLogin->longitude =  $exist->longitude;
            $userLogin->latitude =  $exist->latitude;
            $userLogin->city =  $exist->city;
            $userLogin->country_code = $exist->country_code;
            $userLogin->country =  $exist->country;
        }else{
            $info = json_decode(json_encode(getIpInfo()), true);
            $userLogin->longitude =  @implode(',',$info['long']);
            $userLogin->latitude =  @implode(',',$info['lat']);
            $userLogin->city =  @implode(',',$info['city']);
            $userLogin->country_code = @implode(',',$info['code']);
            $userLogin->country =  @implode(',', $info['country']);
        }

        $userAgent = osBrowser();
        $userLogin->user_id = $user->id;
        $userLogin->user_ip =  $ip;

        $userLogin->browser = @$userAgent['browser'];
        $userLogin->os = @$userAgent['os_platform'];
        $userLogin->save();

        return redirect()->route('user.home');
    }


}
