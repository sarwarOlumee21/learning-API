<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAdminEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserRegistered  $event
     * @return void
     */
public function handle(UserRegistered $event)
{
    \Log::info('SendAdminEmail executed');
    Mail::raw(
        'Welcome to our application!',
        function ($message) use ($event) {
            $message
                ->to('sarwarolumi65@gmail.com')
                ->subject('Welcome');
        }
    );
}
}
