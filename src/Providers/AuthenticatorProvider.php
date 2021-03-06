<?php


namespace Styde\Providers;

use Alfredoem\Container\Provider;
use Styde\Authenticator;
use Styde\AuthenticatorInterface;

class AuthenticatorProvider extends Provider
{

    public function register()
    {
        $this->container->singleton(AuthenticatorInterface::class, function ($app) {
            return new Authenticator($app->make('session'));
        });
    }
}