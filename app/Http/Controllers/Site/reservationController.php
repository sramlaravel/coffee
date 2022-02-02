<?php

namespace App\Http\Controllers\Site;




use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReservationRequest;

use App\Http\Controllers\Controller;

use App\Models\Industry;

use App\Models\Vendor;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index()
    {


        $Industry=Industry::all();
        return view('front.reservation',compact('Industry' ) );
    }


    public function store( ReservationRequest $request)
    {


        try {

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            if (!$request->has('approved_by'))
                $request->request->add(['approved_by' => 0]);
            else
                $request->request->add(['approved_by' => 1]);

            if (!$request->has('registry_status_id'))
                $request->request->add(['registry_status_id' => 0]);
            else
                $request->request->add(['registry_status_id' => 1]);

//            $filePath = "";
//            if ($request->has('icon')) {
//                $filePath = uploadImage('vendors', $request->logo);
//            }


           Vendor::create([
                'f_name' => $request->get('f_name'),
                'l_name' => $request->get('l_name'),
                'email' => $request->get('email'),
                'mobile' => $request->get('phone'),
                'address' => $request->get('message'),
                'company_name' => $request->get('company_name'),
                'industry_id' => $request->get('Industry_id'),
                'phone' => $request->get('phone'),
                'active' => $request->get('active'),
                 'approved_by' => $request->get('approved_by'),
                 'registry_status_id' => $request->get('registry_status_id')

            ]

            );

                    $response['status'] = 1;
               $response['message'] =  'you_have_subscribed_successfully';



            return json_encode($response);
         //   return redirect()->route('reservation')->with(['success' => 'لقد تلقينا رسالتك ونود أن نشكرك على مراسلتنا.سيتم مراجعه رسالتك عزيزي الزائر بقى على تواصل معنا. نحن هنا لمساعدتك']);

        } catch (\Exception $ex) {

            return $ex;
         //   return redirect()->route('contact')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }









    }


}
