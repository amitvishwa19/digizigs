<?php

use App\Jobs\TestJob;
use App\Models\Order;
use App\Mail\TestMail;
use App\Classes\Setting;
use App\Console\Commands\GithubDeploy;
use App\Jobs\MailSendJob;
use Illuminate\Support\Facades\Mail;
use App\Events\Order\OrderProcessEvent;

Route::get('/mail',function(){
    //dispatch(new MailSendJob);
    Mail::to('info@digizigs.com')->send(new TestMail);
    return 'Mail Sent successfully';
});

Route::get('/job',function(){
    dispatch(new TestJob);
});

Route::get('/ptm',function(){
    $status = 'success';
    $orderId = 'SA1597488700';
    //dd(config('services.paytm-wallet.callback_url')) ;
    event(new OrderProcessEvent($status,$orderId));
});

Route::get('/settings',function(){

    $setting = new Setting;

    $GithubDeploy = $setting->get('app.name');
    return $GithubDeploy;


});
