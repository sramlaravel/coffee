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

define('PAGINATION_COUNT', 10);
Route::get('cron/btc/rate', 'CronController@index')->name('cron');
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
       Route::get('/', 'LoginController@showLoginForm')->name('login');
       Route::post('/', 'LoginController@login')->name('login');
       Route::get('logout', 'LoginController@logout')->name('logout');
        // Admin Password Reset
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::post('password/reset', 'ForgotPasswordController@sendResetCodeEmail');
        Route::post('password/verify-code', 'ForgotPasswordController@verifyCode')->name('password.verify.code');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
        Route::post('password/reset/change', 'ResetPasswordController@reset')->name('password.change');
    });


//    Route::middleware('admin')->group(function () {

        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::post('profile', 'AdminController@profileUpdate')->name('profile.update');
        Route::get('password', 'AdminController@password')->name('password');
        Route::post('password', 'AdminController@passwordUpdate')->name('password.update');

        //Notification
        Route::get('notifications','AdminController@notifications')->name('notifications');
        Route::get('notification/read/{id}','AdminController@notificationRead')->name('notification.read');
        Route::get('notifications/read-all','AdminController@readAll')->name('notifications.readAll');

        //Report Bugs
        Route::get('request-report','AdminController@requestReport')->name('request.report');
        Route::post('request-report','AdminController@reportSubmit');
        Route::get('system-info','AdminController@systemInfo')->name('system.info');

        // Users Manager
        Route::get('users', 'ManageUsersController@allUsers')->name('users.all');
        Route::get('users/active', 'ManageUsersController@activeUsers')->name('users.active');
        Route::get('users/banned', 'ManageUsersController@bannedUsers')->name('users.banned');
        Route::get('users/email-verified', 'ManageUsersController@emailVerifiedUsers')->name('users.email.verified');
        Route::get('users/email-unverified', 'ManageUsersController@emailUnverifiedUsers')->name('users.email.unverified');
        Route::get('users/sms-unverified', 'ManageUsersController@smsUnverifiedUsers')->name('users.sms.unverified');
        Route::get('users/sms-verified', 'ManageUsersController@smsVerifiedUsers')->name('users.sms.verified');
        Route::get('users/with-balance', 'ManageUsersController@usersWithBalance')->name('users.with.balance');

        Route::get('users/{scope}/search', 'ManageUsersController@search')->name('users.search');
        Route::get('user/detail/{id}', 'ManageUsersController@detail')->name('users.detail');
        Route::post('user/update/{id}', 'ManageUsersController@update')->name('users.update');
        Route::post('user/add-sub-balance/{id}', 'ManageUsersController@addSubBalance')->name('users.add.sub.balance');
        Route::get('user/send-email/{id}', 'ManageUsersController@showEmailSingleForm')->name('users.email.single');
        Route::post('user/send-email/{id}', 'ManageUsersController@sendEmailSingle')->name('users.email.single');
        Route::get('user/login/{id}', 'ManageUsersController@login')->name('users.login');
        Route::get('user/transactions/{id}', 'ManageUsersController@transactions')->name('users.transactions');
        Route::get('user/deposits/{id}', 'ManageUsersController@deposits')->name('users.deposits');
        Route::get('user/deposits/via/{method}/{type?}/{userId}', 'ManageUsersController@depositViaMethod')->name('users.deposits.method');
        Route::get('user/withdrawals/{id}', 'ManageUsersController@withdrawals')->name('users.withdrawals');
        Route::get('user/withdrawals/via/{method}/{type?}/{userId}', 'ManageUsersController@withdrawalsViaMethod')->name('users.withdrawals.method');
        // Login History
        Route::get('users/login/history/{id}', 'ManageUsersController@userLoginHistory')->name('users.login.history.single');

        Route::get('users/send-email', 'ManageUsersController@showEmailAllForm')->name('users.email.all');
        Route::post('users/send-email', 'ManageUsersController@sendEmailAll')->name('users.email.send');
        Route::get('users/email-log/{id}', 'ManageUsersController@emailLog')->name('users.email.log');
        Route::get('users/email-details/{id}', 'ManageUsersController@emailDetails')->name('users.email.details');
        //use product
        Route::get('users/product/list/{id}', 'ManageUsersController@userProduct')->name('users.product.list');
        Route::get('users/sold/product/list/{id}', 'ManageUsersController@userSoldProduct')->name('users.sold.product.list');
        Route::get('users/purchase/product/list/{id}', 'ManageUsersController@userPurchaseProduct')->name('users.purchase.product.list');

        //Category
        Route::get('categories', 'CategoryController@index')->name('category.index');
        Route::post('category/store', 'CategoryController@store')->name('category.store');
        Route::post('category/update', 'CategoryController@update')->name('category.update');
        Route::get('category/specification/list/{id}', 'CategoryController@specification')->name('category.specification');
        Route::get('category/subcategory/list/{id}', 'CategoryController@subcategory')->name('category.subcategory.list');

        //Sub category
        Route::get('subcategories', 'SubcategoryController@index')->name('category.subcategory.index');
        Route::post('subcategory/store', 'SubcategoryController@store')->name('subcategory.store');
        Route::post('subcategory/update', 'SubcategoryController@update')->name('subcategory.update');

        //Brand
        Route::get('brands', 'BrandController@index')->name('brand.index');
        Route::post('brand/store', 'BrandController@store')->name('brand.store');
        Route::post('brand/update', 'BrandController@update')->name('brand.update');

        //specification
        Route::get('specification/list','SpecificationController@index')->name('specification.index');
        Route::post('specification/store','SpecificationController@store')->name('specification.store');
        Route::post('specification/update','SpecificationController@update')->name('specification.update');

        // manage product
        Route::get('product/list', 'ProductController@index')->name('product.index');
        Route::get('product/detail/{id}', 'ProductController@detail')->name('product.detail');
        Route::get('product/approved/list', 'ProductController@approved')->name('product.approved');
        Route::get('product/pending/list', 'ProductController@pending')->name('product.pending');
        Route::get('product/cancel/list', 'ProductController@cancel')->name('product.cancel');
        Route::get('product/expired/list', 'ProductController@expired')->name('product.expired');
        Route::post('product/approveby/', 'ProductController@approvBy')->name('product.approveby');
        Route::post('product/cancelby/', 'ProductController@cancelBy')->name('product.cancelby');
        Route::get('product/category/search/{scope}', 'ProductController@productCategorySearch')->name('product.category');
        Route::get('product/search/{scope}', 'ProductController@search')->name('product.search');
        Route::post('product/featured/include', 'ProductController@featuredInclude')->name('product.featured.include');
        Route::post('product/featured/remove', 'ProductController@featuredNotInclude')->name('product.featured.remove');
        Route::get('product/report', 'ProductController@productReport')->name('product.report');

        // Order Proudct
        Route::get('order/list', 'OrderController@index')->name('order.index');
        Route::get('pending/order/list', 'OrderController@pending')->name('order.pending');
        Route::get('complated/order/list', 'OrderController@complated')->name('order.complated');
        Route::get('in-process/order/list', 'OrderController@inProcess')->name('order.inProcess');
        Route::get('shipped/order/list', 'OrderController@shipped')->name('order.shipped');
        Route::get('onhold/order/list', 'OrderController@onHold')->name('order.onHold');
        Route::get('disputed/order/list', 'OrderController@disputed')->name('order.disputed');
        Route::get('cancelled/order/list', 'OrderController@cancelled')->name('order.cancelled');
        Route::post('order/refund', 'OrderController@refund')->name('order.refund');
        Route::post('order/resolved', 'OrderController@resolved')->name('order.resolved');
        Route::get('order/search', 'OrderController@search')->name('order.search');

        //Advertisement
        Route::get('advertisement/list', 'AdvertisementController@index')->name('ads.index');
        Route::get('advertisement/edit/{id}', 'AdvertisementController@edit')->name('ads.edit');
        Route::post('advertisement/store', 'AdvertisementController@store')->name('ads.store');
        Route::post('advertisement/update/{id}', 'AdvertisementController@update')->name('ads.update');
        Route::post('advertisement/delete', 'AdvertisementController@delete')->name('ads.delete');

        // Deposit Gateway
        Route::name('gateway.')->prefix('gateway')->group(function(){
            // Automatic Gateway
            Route::get('automatic', 'GatewayController@index')->name('automatic.index');
            Route::get('automatic/edit/{alias}', 'GatewayController@edit')->name('automatic.edit');
            Route::post('automatic/update/{code}', 'GatewayController@update')->name('automatic.update');
            Route::post('automatic/remove/{code}', 'GatewayController@remove')->name('automatic.remove');
            Route::post('automatic/activate', 'GatewayController@activate')->name('automatic.activate');
            Route::post('automatic/deactivate', 'GatewayController@deactivate')->name('automatic.deactivate');

            // Manual Methods
            Route::get('manual', 'ManualGatewayController@index')->name('manual.index');
            Route::get('manual/new', 'ManualGatewayController@create')->name('manual.create');
            Route::post('manual/new', 'ManualGatewayController@store')->name('manual.store');
            Route::get('manual/edit/{alias}', 'ManualGatewayController@edit')->name('manual.edit');
            Route::post('manual/update/{id}', 'ManualGatewayController@update')->name('manual.update');
            Route::post('manual/activate', 'ManualGatewayController@activate')->name('manual.activate');
            Route::post('manual/deactivate', 'ManualGatewayController@deactivate')->name('manual.deactivate');
        });


        // DEPOSIT SYSTEM
        Route::name('deposit.')->prefix('deposit')->group(function(){
            Route::get('/', 'DepositController@deposit')->name('list');
            Route::get('pending', 'DepositController@pending')->name('pending');
            Route::get('rejected', 'DepositController@rejected')->name('rejected');
            Route::get('approved', 'DepositController@approved')->name('approved');
            Route::get('successful', 'DepositController@successful')->name('successful');
            Route::get('details/{id}', 'DepositController@details')->name('details');

            Route::post('reject', 'DepositController@reject')->name('reject');
            Route::post('approve', 'DepositController@approve')->name('approve');
            Route::get('via/{method}/{type?}', 'DepositController@depositViaMethod')->name('method');
            Route::get('/{scope}/search', 'DepositController@search')->name('search');
            Route::get('date-search/{scope}', 'DepositController@dateSearch')->name('dateSearch');

        });

        // WITHDRAW SYSTEM
        Route::name('withdraw.')->prefix('withdraw')->group(function(){
            Route::get('pending', 'WithdrawalController@pending')->name('pending');
            Route::get('approved', 'WithdrawalController@approved')->name('approved');
            Route::get('rejected', 'WithdrawalController@rejected')->name('rejected');
            Route::get('log', 'WithdrawalController@log')->name('log');
            Route::get('via/{method_id}/{type?}', 'WithdrawalController@logViaMethod')->name('method');
            Route::get('{scope}/search', 'WithdrawalController@search')->name('search');
            Route::get('date-search/{scope}', 'WithdrawalController@dateSearch')->name('dateSearch');
            Route::get('details/{id}', 'WithdrawalController@details')->name('details');
            Route::post('approve', 'WithdrawalController@approve')->name('approve');
            Route::post('reject', 'WithdrawalController@reject')->name('reject');


            // Withdraw Method
            Route::get('method/', 'WithdrawMethodController@methods')->name('method.index');
            Route::get('method/create', 'WithdrawMethodController@create')->name('method.create');
            Route::post('method/create', 'WithdrawMethodController@store')->name('method.store');
            Route::get('method/edit/{id}', 'WithdrawMethodController@edit')->name('method.edit');
            Route::post('method/edit/{id}', 'WithdrawMethodController@update')->name('method.update');
            Route::post('method/activate', 'WithdrawMethodController@activate')->name('method.activate');
            Route::post('method/deactivate', 'WithdrawMethodController@deactivate')->name('method.deactivate');
        });

        // Report
        Route::get('report/transaction', 'ReportController@transaction')->name('report.transaction');
        Route::get('report/transaction/search', 'ReportController@transactionSearch')->name('report.transaction.search');
        Route::get('report/login/history', 'ReportController@loginHistory')->name('report.login.history');
        Route::get('report/login/ipHistory/{ip}', 'ReportController@loginIpHistory')->name('report.login.ipHistory');
        Route::get('report/email/history', 'ReportController@emailHistory')->name('report.email.history');


        // Admin Support
        Route::get('tickets', 'SupportTicketController@tickets')->name('ticket');
        Route::get('tickets/pending', 'SupportTicketController@pendingTicket')->name('ticket.pending');
        Route::get('tickets/closed', 'SupportTicketController@closedTicket')->name('ticket.closed');
        Route::get('tickets/answered', 'SupportTicketController@answeredTicket')->name('ticket.answered');
        Route::get('tickets/view/{id}', 'SupportTicketController@ticketReply')->name('ticket.view');
        Route::post('ticket/reply/{id}', 'SupportTicketController@ticketReplySend')->name('ticket.reply');
        Route::get('ticket/download/{ticket}', 'SupportTicketController@ticketDownload')->name('ticket.download');
        Route::post('ticket/delete', 'SupportTicketController@ticketDelete')->name('ticket.delete');


        // Language Manager
        Route::get('/language', 'LanguageController@langManage')->name('language.manage');
        Route::post('/language', 'LanguageController@langStore')->name('language.manage.store');
        Route::post('/language/delete/{id}', 'LanguageController@langDel')->name('language.manage.del');
        Route::post('/language/update/{id}', 'LanguageController@langUpdate')->name('language.manage.update');
        Route::get('/language/edit/{id}', 'LanguageController@langEdit')->name('language.key');
        Route::post('/language/import', 'LanguageController@langImport')->name('language.importLang');



        Route::post('language/store/key/{id}', 'LanguageController@storeLanguageJson')->name('language.store.key');
        Route::post('language/delete/key/{id}', 'LanguageController@deleteLanguageJson')->name('language.delete.key');
        Route::post('language/update/key/{id}', 'LanguageController@updateLanguageJson')->name('language.update.key');



        // General Setting
        Route::get('general-setting', 'GeneralSettingController@index')->name('setting.index');
        Route::post('general-setting', 'GeneralSettingController@update')->name('setting.update');
        Route::get('optimize', 'GeneralSettingController@optimize')->name('setting.optimize');

        // Logo-Icon
        Route::get('setting/logo-icon', 'GeneralSettingController@logoIcon')->name('setting.logo.icon');
        Route::post('setting/logo-icon', 'GeneralSettingController@logoIconUpdate')->name('setting.logo.icon');

        //Custom CSS
        Route::get('custom-css','GeneralSettingController@customCss')->name('setting.custom.css');
        Route::post('custom-css','GeneralSettingController@customCssSubmit');

        //Cookie
        Route::get('cookie','GeneralSettingController@cookie')->name('setting.cookie');
        Route::post('cookie','GeneralSettingController@cookieSubmit');

        // Plugin
        Route::get('extensions', 'ExtensionController@index')->name('extensions.index');
        Route::post('extensions/update/{id}', 'ExtensionController@update')->name('extensions.update');
        Route::post('extensions/activate', 'ExtensionController@activate')->name('extensions.activate');
        Route::post('extensions/deactivate', 'ExtensionController@deactivate')->name('extensions.deactivate');

        // Email Setting
        Route::get('email-template/global', 'EmailTemplateController@emailTemplate')->name('email.template.global');
        Route::post('email-template/global', 'EmailTemplateController@emailTemplateUpdate')->name('email.template.global');
        Route::get('email-template/setting', 'EmailTemplateController@emailSetting')->name('email.template.setting');
        Route::post('email-template/setting', 'EmailTemplateController@emailSettingUpdate')->name('email.template.setting');
        Route::get('email-template/index', 'EmailTemplateController@index')->name('email.template.index');
        Route::get('email-template/{id}/edit', 'EmailTemplateController@edit')->name('email.template.edit');
        Route::post('email-template/{id}/update', 'EmailTemplateController@update')->name('email.template.update');
        Route::post('email-template/send-test-mail', 'EmailTemplateController@sendTestMail')->name('email.template.test.mail');


        // SMS Setting
        Route::get('sms-template/global', 'SmsTemplateController@smsTemplate')->name('sms.template.global');
        Route::post('sms-template/global', 'SmsTemplateController@smsTemplateUpdate')->name('sms.template.global');
        Route::get('sms-template/setting','SmsTemplateController@smsSetting')->name('sms.templates.setting');
        Route::post('sms-template/setting', 'SmsTemplateController@smsSettingUpdate')->name('sms.template.setting');
        Route::get('sms-template/index', 'SmsTemplateController@index')->name('sms.template.index');
        Route::get('sms-template/edit/{id}', 'SmsTemplateController@edit')->name('sms.template.edit');
        Route::post('sms-template/update/{id}', 'SmsTemplateController@update')->name('sms.template.update');
        Route::post('email-template/send-test-sms', 'SmsTemplateController@sendTestSMS')->name('sms.template.test.sms');

        // SEO
        Route::get('seo', 'FrontendController@seoEdit')->name('seo');
        // Frontend
        Route::name('frontend.')->prefix('frontend')->group(function () {
            Route::get('templates', 'FrontendController@templates')->name('templates');
            Route::post('templates', 'FrontendController@templatesActive')->name('templates.active');

            Route::get('frontend-sections/{key}', 'FrontendController@frontendSections')->name('sections');
            Route::post('frontend-content/{key}', 'FrontendController@frontendContent')->name('sections.content');
            Route::get('frontend-element/{key}/{id?}', 'FrontendController@frontendElement')->name('sections.element');
            Route::post('remove', 'FrontendController@remove')->name('remove');

            // Page Builder
            Route::get('manage-pages', 'PageBuilderController@managePages')->name('manage.pages');
            Route::post('manage-pages', 'PageBuilderController@managePagesSave')->name('manage.pages.save');
            Route::post('manage-pages/update', 'PageBuilderController@managePagesUpdate')->name('manage.pages.update');
            Route::post('manage-pages/delete', 'PageBuilderController@managePagesDelete')->name('manage.pages.delete');
            Route::get('manage-section/{id}', 'PageBuilderController@manageSection')->name('manage.section');
            Route::post('manage-section/{id}', 'PageBuilderController@manageSectionUpdate')->name('manage.section.update');
        });
    });

//
//    });
});
Route::name('user.')->prefix('user')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('authorization', 'AuthorizationController@authorizeForm')->name('authorization');
        Route::get('resend-verify', 'AuthorizationController@sendVerifyCode')->name('send.verify.code');
        Route::post('verify-email', 'AuthorizationController@emailVerification')->name('verify.email');
        Route::post('verify-sms', 'AuthorizationController@smsVerification')->name('verify.sms');
        Route::post('verify-g2fa', 'AuthorizationController@g2faVerification')->name('go2fa.verify');
        Route::middleware(['checkStatus'])->group(function () {

            Route::get('dashboard', 'UserController@home')->name('home');

            Route::get('profile-setting', 'UserController@profile')->name('profile.setting');
            Route::post('profile-setting', 'UserController@submitProfile');
            Route::get('change-password', 'UserController@changePassword')->name('change.password');
            Route::post('change-password', 'UserController@submitPassword');
            //2FA
            Route::get('twofactor', 'UserController@show2faForm')->name('twofactor');
            Route::post('twofactor/enable', 'UserController@create2fa')->name('twofactor.enable');
            Route::post('twofactor/disable', 'UserController@disable2fa')->name('twofactor.disable');

            // Product Order
            Route::post('order', 'OrderController@store')->name('order.store');
            Route::get('order/payment', 'OrderController@payment')->name('order.payment');
            Route::post('order/payment/insert', 'OrderController@paymentInsert')->name('order.payment.insert');

            // Deposit
            Route::any('/deposit', 'Gateway\PaymentController@deposit')->name('deposit');
            Route::post('deposit/insert', 'Gateway\PaymentController@depositInsert')->name('deposit.insert');
            Route::get('deposit/preview', 'Gateway\PaymentController@depositPreview')->name('deposit.preview');
            Route::get('deposit/confirm', 'Gateway\PaymentController@depositConfirm')->name('deposit.confirm');
            Route::get('deposit/manual', 'Gateway\PaymentController@manualDepositConfirm')->name('deposit.manual.confirm');
            Route::post('deposit/manual', 'Gateway\PaymentController@manualDepositUpdate')->name('deposit.manual.update');
            Route::any('deposit/history', 'UserController@depositHistory')->name('deposit.history');
            Route::get('transaction/history', 'UserController@transactionHistory')->name('transaction.history');

            // Withdraw
            Route::get('/withdraw', 'UserController@withdrawMoney')->name('withdraw');
            Route::post('/withdraw', 'UserController@withdrawStore')->name('withdraw.money');
            Route::get('/withdraw/preview', 'UserController@withdrawPreview')->name('withdraw.preview');
            Route::post('/withdraw/preview', 'UserController@withdrawSubmit')->name('withdraw.submit');
            Route::get('/withdraw/history', 'UserController@withdrawLog')->name('withdraw.history');

//            //sold product
            Route::get('order/list', 'OrderProductController@orderList')->name('order.list');
            Route::get('order/pending/list', 'OrderProductController@pending')->name('order.pending');
            Route::get('order/complete/list', 'OrderProductController@complete')->name('order.complete');
            Route::get('order/in-process/list', 'OrderProductController@process')->name('order.process');
            Route::get('order/shipped/list', 'OrderProductController@ship')->name('order.ship');
            Route::get('order/dispute/list', 'OrderProductController@dispute')->name('order.dispute');
            Route::get('order/cancel/list', 'OrderProductController@cancel')->name('order.cancel');

            Route::get('order/detail/{id}', 'OrderProductController@detail')->name('order.detail');
            Route::post('order/in-process/', 'OrderProductController@inProcess')->name('order.inprocess');
            Route::post('order/cancelled/', 'OrderProductController@cancelled')->name('order.cancelled');
            Route::post('order/shipped/', 'OrderProductController@shipped')->name('order.shipped');

            //purchase product
            Route::get('purchase/list', 'PurchaseProductController@index')->name('purchase.list');
            Route::post('purchase/product/dispute', 'PurchaseProductController@dispute')->name('purchase.product.dispute');
            Route::post('purchase/product/complated', 'PurchaseProductController@complated')->name('purchase.product.complated');


            //Product
            Route::get('product/list', 'ProductController@index')->name('product.index');
            Route::get('product/create', 'ProductController@create')->name('product.create');
            Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
            Route::post('product/update/{id}', 'ProductController@update')->name('product.update');
            Route::post('product/store', 'ProductController@store')->name('product.store');
            Route::get('add/product/specification/{id}', 'ProductController@addSpecification')->name('add.product.specification');
            Route::post('store/product/specification/{id}', 'ProductController@storeSpecification')->name('store.product.specification');

            //Product Review
            Route::post('product/review/store', 'ReviewController@store')->name('product.review.store');
            Route::post('product/report', 'UserController@report')->name('product.report');

            //Message
            Route::post('contact/store', 'ContactController@store')->name('contact.store');
            Route::get('message', 'ContactController@send')->name('contact.send');
            Route::post('message/reply/store', 'ContactController@reply')->name('contact.reply');
            Route::get('reply/message/{id}', 'ContactController@read')->name('contact.read');
        });
    });});
    // Admin Support
    Route::get('tickets', 'SupportTicketController@tickets')->name('ticket');
    Route::get('tickets/pending', 'SupportTicketController@pendingTicket')->name('ticket.pending');
    Route::get('tickets/closed', 'SupportTicketController@closedTicket')->name('ticket.closed');
    Route::get('tickets/answered', 'SupportTicketController@answeredTicket')->name('ticket.answered');
    Route::get('tickets/view/{id}', 'SupportTicketController@ticketReply')->name('ticket.view');
    Route::post('ticket/reply/{id}', 'SupportTicketController@ticketReplySend')->name('ticket.reply');
    Route::get('ticket/download/{ticket}', 'SupportTicketController@ticketDownload')->name('ticket.download');
    Route::post('ticket/delete', 'SupportTicketController@ticketDelete')->name('ticket.delete');

//Route::group(['namespace' => 'admin', 'prefix' => 'admin' ], function () {
//    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
//    Route::get('delete/{id}', 'DashboardController@destroy')->name('admin.dashboard.delete');
//
//    Route::get('logout', 'LoginController@logout')->name('logout');
//    ######################### Begin Languages Route ########################
//
//    Route::group(['prefix' => 'languages'], function () {
//        Route::get('/', 'LanguagesController@index')->name('admin.languages');
//        Route::get('create', 'LanguagesController@create')->name('admin.languages.create');
//
//        Route::post('store', 'LanguagesController@store')->name('admin.languages.store');
//        Route::get('edit/{id}', 'LanguagesController@edit')->name('admin.languages.edit');
//        Route::post('update/{id}', 'LanguagesController@update')->name('admin.languages.update');
//
//        Route::get('delete/{id}', 'LanguagesController@destroy')->name('admin.languages.delete');
//        Route::get('changeStatus/{id}', 'LanguagesController@changeStatus')->name('admin.languages.status');
//    });
//    ######################### End Languages Route ########################
//
//    ######################### Begin Languages Route ########################
//
//    Route::group(['prefix' => 'Sliders'], function () {
//        Route::get('/', 'SliderController@index')->name('admin.Sliders');
//        Route::get('create', 'SliderController@create')->name('admin.Sliders.create');
//
//        Route::post('store', 'SliderController@store')->name('admin.Sliders.store');
//        Route::get('edit/{id}', 'SliderController@edit')->name('admin.Sliders.edit');
//        Route::post('update/{id}', 'SliderController@update')->name('admin.Sliders.update');
//
//        Route::get('delete/{id}', 'SliderController@destroy')->name('admin.Sliders.delete');
//        Route::get('changeStatus/{id}', 'SliderController@changeStatus')->name('admin.Sliders.status');
//    });
//    ######################### End Languages Route ########################
//
//
//    ######################### Begin currency  ########################
//
//    Route::group(['prefix' => 'currency'], function () {
//        Route::get('/', 'CurrencyController@index')->name('admin.currency');
//        Route::get('create', 'CurrencyController@create')->name('admin.currency.create');
//        Route::post('store', 'CurrencyController@store')->name('admin.currency.store');
//        Route::get('edit/{id}', 'CurrencyController@edit')->name('admin.currency.edit');
//        Route::post('update/{id}', 'CurrencyController@update')->name('admin.currency.update');
//        Route::get('delete/{id}', 'CurrencyController@destroy')->name('admin.currency.delete');
//        Route::get('changeStatus/{id}', 'CurrencyController@changeStatus')->name('admin.currency.status');
//    });
//
//    ######################### End currency########################
//
//
//    ######################### Begin SERVICE  Route ########################
//    Route::group(['prefix' => 'services'], function () {
//        Route::get('/', 'ServicesController@index')->name('admin.mainservice');
//        Route::get('create', 'ServicesController@create')->name('admin.mainservice.create');
//
//        Route::post('store', 'ServicesController@store')->name('admin.mainservice.store');
//        Route::get('edit/{id}', 'ServicesController@edit')->name('admin.mainservice.edit');
//        Route::post('update/{id}', 'ServicesController@update')->name('admin.mainservice.update');
//
//        Route::get('delete/{id}', 'ServicesController@destroy')->name('admin.mainservice.delete');
//        Route::get('changeStatus/{id}', 'ServicesController@changeStatus')->name('admin.mainservice.status');
//    });
//
//
//
//    ######################### End SERVICE Route ########################
//
//
//    ######################### Begin  locations  Route ########################
//
//    Route::group(['prefix' => 'branches'], function () {
//        Route::get('/', 'BranchesController@index')->name('admin.branches');
//        Route::get('create', 'BranchesController@create')->name('admin.branches.create');
//
//        Route::post('store', 'BranchesController@store')->name('admin.branches.store');
//        Route::get('edit/{id}', 'BranchesController@edit')->name('admin.branches.edit');
//        Route::post('update/{id}', 'BranchesController@update')->name('admin.branches.update');
//
//        Route::get('delete/{id}', 'BranchesController@destroy')->name('admin.branches.delete');
//    });
//
//
//    ######################### End locations Route ########################
//    ######################### Begin  locations  Route ########################
//
//    Route::group(['prefix' => 'Services'], function () {
//        Route::get('/', 'ServicesController@index')->name('admin.Services');
//        Route::get('create', 'ServicesController@create')->name('admin.Services.create');
//
//        Route::post('store', 'ServicesController@store')->name('admin.Services.store');
//        Route::get('edit/{id}', 'ServicesController@edit')->name('admin.Services.edit');
//        Route::post('update/{id}', 'ServicesController@update')->name('admin.Services.update');
//
//        Route::get('delete/{id}', 'ServicesController@destroy')->name('admin.Services.delete');
//    });
//
//
//    ######################### End locations Route ########################
//
//    ######################### Begin  partners  Route ########################
//
//    Route::group(['prefix' => 'partners'], function () {
//        Route::get('/', 'PartnersController@index')->name('admin.mainparnters');
//        Route::get('create', 'PartnersController@create')->name('admin.mainparnters.create');
//
//        Route::post('store', 'PartnersController@store')->name('admin.mainparnters.store');
//        Route::get('edit/{id}', 'PartnersController@edit')->name('admin.mainparnters.edit');
//        Route::post('update/{id}', 'PartnersController@update')->name('admin.mainparnters.update');
//
//        Route::get('delete/{id}', 'PartnersController@destroy')->name('admin.mainparnters.delete');
//        Route::get('changeStatus/{id}', 'PartnersController@changeStatus')->name('admin.mainparnters.status');
//    });
//    ######################### End partners Route ########################
//
//
//    ######################### Begin  partners  Route ########################
//
//    Route::group(['prefix' => 'about'], function () {
//        Route::get('/', 'AboutsController@index')->name('admin.about');
//        Route::get('create', 'AboutsController@create')->name('admin.about.create');
//
//        Route::post('store', 'AboutsController@store')->name('admin.about.store');
//        Route::get('edit/{id}', 'AboutsController@edit')->name('admin.about.edit');
//        Route::post('update/{id}', 'AboutsController@update')->name('admin.about.update');
//
//        Route::get('delete/{id}', 'AboutsController@destroy')->name('admin.about.delete');
//        Route::get('changeStatus/{id}', 'AboutsController@changeStatus')->name('admin.about.status');
//    });
//    ######################### End partners Route ########################
//
//    ######################### Begin Main ServicePoint Routes ########################
//
//
//    Route::group(['prefix' => 'Points'], function () {
//        Route::get('/', 'PointsController@index')->name('admin.ServicePoint');
//        Route::get('create', 'PointsController@create')->name('admin.ServicePoint.create');
//
//        Route::post('store', 'PointsController@store')->name('admin.ServicePoint.store');
//        Route::get('edit/{id}', 'PointsController@edit')->name('admin.ServicePoint.edit');
//        Route::post('update/{id}', 'PointsController@update')->name('admin.ServicePoint.update');
//        Route::get('getstates/{id}', 'PointsController@getStates')->name('admin.ServicePoint.getstates');
//
//        Route::get('delete/{id}', 'PointsController@destroy')->name('admin.ServicePoint.delete');
//        Route::get('changeStatus/{id}', 'PointsController@changeStatus')->name('admin.ServicePoint.status');
//    });
//
//
//    ######################### End ServicePoint Route ########################
//
//
//    ######################### Begin NEWS Routes ########################
//
//
//
//    Route::group(['prefix' => 'News'], function () {
//        Route::get('/', 'ComeNewsController@index')->name('admin.comenew');
//        Route::get('create', 'ComeNewsController@create')->name('admin.comenew.create');
//
//        Route::post('store', 'ComeNewsController@store')->name('admin.comenew.store');
//        Route::get('edit/{id}', 'ComeNewsController@edit')->name('admin.comenew.edit');
//        Route::post('update/{id}', 'ComeNewsController@update')->name('admin.comenew.update');
//        Route::get('delete/{id}', 'ComeNewsController@destroy')->name('admin.comenew.delete');
//    });
//
//    ######################### End opinion Route ########################
//
//    Route::group(['prefix' => 'Opnoin'], function () {
//        Route::get('/', 'opinionController@index')->name('admin.opinion');
//        Route::get('create', 'opinionController@create')->name('admin.opinion.create');
//        Route::post('store', 'opinionController@store')->name('admin.opinion.store');
//        Route::get('edit/{id}', 'opinionController@edit')->name('admin.opinion.edit');
//        Route::post('update/{id}', 'opinionController@update')->name('admin.opinion.update');
//        Route::get('delete/{id}', 'opinionController@destroy')->name('admin.opinion.delete');
//    });
//
//    ######################### End opinion Route ########################
//
//    ######################### End Customer Route ########################
//
//    Route::group(['prefix' => 'Customer'], function () {
//        Route::get('/', 'CustomerController@index')->name('admin.Customer');
//        Route::get('create', 'CustomerController@create')->name('admin.Customer.create');
//        Route::post('store', 'CustomerController@store')->name('admin.Customer.store');
//        Route::get('edit/{id}', 'CustomerController@edit')->name('admin.Customer.edit');
//        Route::post('update/{id}', 'CustomerController@update')->name('admin.Customer.update');
//        Route::get('delete/{id}', 'CustomerController@destroy')->name('admin.Customer.delete');
//    });
//
//    ######################### End Customer Route ########################
//
//    ######################### End Breackfast Route ########################
//
//    Route::group(['prefix' => 'Breackfast'], function () {
//        Route::get('/', 'BreackfastController@index')->name('admin.Breackfast');
//        Route::get('create', 'BreackfastController@create')->name('admin.Breackfast.create');
//        Route::post('store', 'BreackfastController@store')->name('admin.Breackfast.store');
//        Route::get('edit/{id}', 'BreackfastController@edit')->name('admin.Breackfast.edit');
//        Route::post('update/{id}', 'BreackfastController@update')->name('admin.Breackfast.update');
//        Route::get('delete/{id}', 'BreackfastController@destroy')->name('admin.Breackfast.delete');
//    });
//
//    ######################### End Breackfast Route ########################
//
//
//    ######################### End NEWS Route ########################
//
//    Route::group(['prefix' => 'Dinner'], function () {
//        Route::get('/', 'DinnerController@index')->name('admin.Dinner');
//        Route::get('create', 'DinnerController@create')->name('admin.Dinner.create');
//        Route::post('store', 'DinnerController@store')->name('admin.Dinner.store');
//        Route::get('edit/{id}', 'DinnerController@edit')->name('admin.Dinner.edit');
//        Route::post('update/{id}', 'DinnerController@update')->name('admin.Dinner.update');
//        Route::get('delete/{id}', 'DinnerController@destroy')->name('admin.Dinner.delete');
//    });
//
//    ######################### End NEWS Route ########################
//    Route::group(['prefix' => 'Lunches'], function () {
//        Route::get('/', 'LuncheController@index')->name('admin.Lunches');
//        Route::get('create', 'LuncheController@create')->name('admin.Lunches.create');
//        Route::post('store', 'LuncheController@store')->name('admin.Lunches.store');
//        Route::get('edit/{id}', 'LuncheController@edit')->name('admin.Lunches.edit');
//        Route::post('update/{id}', 'LuncheController@update')->name('admin.Lunches.update');
//        Route::get('delete/{id}', 'LuncheController@destroy')->name('admin.Lunches.delete');
//    });
//
//
//    ######################### End jobs Route ########################
//
//
//    Route::group(['prefix' => 'Jobs'], function () {
//        Route::get('/', 'JobsController@index')->name('admin.Jobs');
//        Route::get('create', 'JobsController@create')->name('admin.Jobs.create');
//
//        Route::post('store', 'JobsController@store')->name('admin.Jobs.store');
//        Route::get('edit/{id}', 'JobsController@edit')->name('admin.Jobs.edit');
//        Route::post('update/{id}', 'JobsController@update')->name('admin.Jobs.update');
//        Route::get('delete/{id}', 'JobsController@destroy')->name('admin.Jobs.delete');
//        Route::get('details/{id}', 'JobsController@details')->name('admin.Jobs.details');
//        Route::get('getDownload/{filename}', 'JobsController@getDownload')->name('admin.Jobs.getDownload');
//    });
//
//
//
//    ######################### Begin jobs Routes ########################
//
//    ######################### Begin Main Categoris Routes ########################
//    Route::group(['prefix' => 'main_categories'], function () {
//        Route::get('/', 'CategoriesController@index')->name('admin.maincategories');
//        Route::get('create', 'CategoriesController@create')->name('admin.maincategories.create');
//        Route::post('store', 'CategoriesController@store')->name('admin.maincategories.store');
//        Route::get('edit/{id}', 'CategoriesController@edit')->name('admin.maincategories.edit');
//        Route::post('update/{id}', 'CategoriesController@update')->name('admin.maincategories.update');
//        Route::get('delete/{id}', 'CategoriesController@destroy')->name('admin.maincategories.delete');
//    });
//
//    ######################### End  Main Categoris Routes  ########################
//
//
//    ######################### Begin jobs Routes ########################
//
//    ######################### Begin Main Categoris Routes ########################
//    Route::group(['prefix' => 'Items'], function () {
//        Route::get('/', 'ItemsController@index')->name('admin.items');
//        Route::get('create', 'ItemsController@create')->name('admin.items.create');
//        Route::post('store', 'ItemsController@store')->name('admin.items.store');
//        Route::get('edit/{id}', 'ItemsController@edit')->name('admin.items.edit');
//        Route::post('update/{id}', 'ItemsController@update')->name('admin.items.update');
//        Route::get('delete/{id}', 'ItemsController@destroy')->name('admin.items.delete');
//    });
//
//    ######################### End  Main Categoris Routes  ########################
//
//
//
//    ######################### Begin Sub Categoris Routes ########################
//    Route::group(['prefix' => 'sub_categories'], function () {
//        Route::get('/', 'SubCategoriesController@index')->name('admin.subcategories');
//        Route::get('create', 'SubCategoriesController@create')->name('admin.subcategories.create');
//        Route::post('store', 'SubCategoriesController@store')->name('admin.subcategories.store');
//        Route::get('edit/{id}', 'SubCategoriesController@edit')->name('admin.subcategories.edit');
//        Route::post('update/{id}', 'SubCategoriesController@update')->name('admin.subcategories.update');
//        Route::get('delete/{id}', 'SubCategoriesController@destroy')->name('admin.subcategories.delete');
//        Route::get('changeStatus/{id}', 'SubCategoriesController@changeStatus')->name('admin.subcategories.status');
//    });
//    ######################### End  Sub Categoris Routes  ########################
//
//
//
//
//    ######################### Begin vendors Routes ########################
//    Route::group(['prefix' => 'vendors'], function () {
//        Route::get('/', 'VendorsController@index')->name('admin.vendors');
//        Route::get('create', 'VendorsController@create')->name('admin.vendors.create');
//        Route::post('store', 'VendorsController@store')->name('admin.vendors.store');
//        Route::get('edit/{id}', 'VendorsController@edit')->name('admin.vendors.edit');
//        Route::post('update/{id}', 'VendorsController@update')->name('admin.vendors.update');
//        Route::get('delete/{id}', 'VendorsController@destroy')->name('admin.vendors.delete');
//    });
//    ######################### End  vendors Routes  ########################
//
//
//
//});




//    Route::get('admin/login', 'LoginController@getLogin')->name('get.admin.login');
//    Route::post('admin/login', 'LoginController@login')->name('admin.login');
//});

########################### test part routes #####################

//Route::get('subcateory', function () {
//
//    $mainCategory = \App\Models\MainCategory::find(31);
//
//    return       $mainCategory->subCategories;
//});
//
//Route::get('maincategory', function () {
//
//    $subcategory = \App\Models\SubCategory::find(1);
//
//    return $subcategory->mainCategory;
//});
