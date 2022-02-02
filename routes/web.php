<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/', function () {
//    return view('front.home');
//});user.product.store
// User Support Ticket
Route::prefix('ticket')->group(function () {
    Route::get('/', 'TicketController@supportTicket')->name('ticket');
    Route::get('/new', 'TicketController@openSupportTicket')->name('ticket.open');
    Route::post('/create', 'TicketController@storeSupportTicket')->name('ticket.store');
    Route::get('/view/{ticket}', 'TicketController@viewTicket')->name('ticket.view');
    Route::post('/reply/{ticket}', 'TicketController@replyTicket')->name('ticket.reply');
    Route::get('/download/{ticket}', 'TicketController@ticketDownload')->name('ticket.download');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::group(['namespace' => 'Site' ], function () {
        //     //guest  user
        Route::get('/', 'HomeController@home')->name('home');

//        Route::get('/', 'Site\HomeController@home')->name('home');

        Route::get('about/', 'aboutController@about')->name('about');
        Route::get('forbuyer/', 'forbuyerController@forbuyer')->name('forbuyer');
        Route::get('forproducer/', 'forproducerController@forproducer')->name('forproducer');


        Route::get('reservation/', 'reservationController@index') ;
        Route::post('reservation/', 'reservationController@store') ;


        Route::get('placeholder-image/{size}', ' HomeController@placeholderImage')->name('placeholder.image');
        Route::get('/cookie/accept',  'HomeController@cookieAccept')->name('cookie.accept');

    });

    Route::name('user.')->group(function () {
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'Auth\LoginController@login');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register')->middleware('regStatus');
        Route::post('check-mail', 'Auth\RegisterController@checkUser')->name('checkUser');

        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetCodeEmail')->name('password.email');
        Route::get('password/code-verify', 'Auth\ForgotPasswordController@codeVerify')->name('password.code.verify');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/verify-code', 'Auth\ForgotPasswordController@verifyCode')->name('password.verify.code');
    });
});


//        Route::group(['prefix' => 'reservation'], function () {
//            Route::post('store', 'reservationController@store')->name('reservation.store');
//        });
        //     route::get('blog/', 'blogController@about')->name('blog');
        //     Route::get('detail/{id}','blogController@detail')->name('detail');
        //     Route::get('project','ProjectController@project')->name('project');
        //     Route::get('project_detials/{id}','ProjectController@projectdetails')->name('project_detials');
        //     Route::get('Services','ServicesController@Services')->name('Services');
        //     route::get('contact/', 'ContactController@contact')->name('contact');
        //     Route::post('contact/', 'ContactController@store')->name('contact.create');
        //     Route::get('services_detials/{id}','ServicesController@projectdetails')->name('services_detials');
        //     route::get('Services/', 'ServicesController@Services')->name('Services');
        //     Route::get('jobs','JobeController@index')->name('jobs');
        //     Route::get('careers/apply/{id}','ApplyController@index');

        //     Route::post('careers/apply/{id} ', 'ApplyController@fileUpload')->name('fileUpload');
        //     /**
        //      *  Cart routes
        // //     */
        // //
        // //    Route::group(['prefix' => 'cart'], function () {
        // //        Route::get('/', 'CartController@getIndex')->name('site.cart.index');
        // //        Route::post('/cart/add/{slug?}', 'CartController@postAdd')->name('site.cart.add');
        // //        Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
        // //        Route::post('/update-all', 'CartController@postUpdateAll')->name('site.cart.update-all');
        // //    });


