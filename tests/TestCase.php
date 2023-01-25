<?php

namespace Shiref\Webhook\Tests;


use Shiref\Webhook\WebhookServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;


class TestCase extends Orchestra
{
    // use DatabaseMigrations;

    protected function getPackageProviders($app)
    {
        return [
            WebhookServiceProvider::class
        ];
    }
}
