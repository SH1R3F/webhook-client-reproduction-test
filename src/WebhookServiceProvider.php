<?php

namespace Shiref\Webhook;

use Illuminate\Support\ServiceProvider;



class WebhookServiceProvider extends ServiceProvider
{

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        // Webhook attribute doesn't exist on testing?
        $this->loadRoutesFrom(__DIR__ . '/../routes/tenant.php');
    }
}
