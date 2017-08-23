<?php

namespace Microservice\Service1\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Microservice\Service1\Events\SomeEvent' => [
            'Microservice\Service1\Listeners\EventListener',
        ],
    ];
}
