<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ChirpCreated;
use App\Listeners\SendWelcomeMessage;
use App\Events\UserRegistered;
use App\Listeners\SendAdminEmail;
use App\Listeners\SendManagerEmail;
use App\Listeners\SendWelcomeEmail;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
protected $listen = [
    UserRegistered::class => [
        SendAdminEmail::class,
        SendManagerEmail::class,
        SendWelcomeEmail::class,
    ],
];


    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
