<?php

namespace Styde\Providers;

use Alfredoem\Container\Provider;
use Styde\SessionArrayDriver;
use Styde\SessionManager;

class SessionProvider extends Provider
{

    public function register()
    {
        $this->container->singleton('session', function ($app) {
            $data = array(
                'user_data' => array(
                    'name' => 'Duilio',
                    'role' => 'teacher'
                )
            );

            $driver = new SessionArrayDriver($data);

            return new SessionManager($driver);
        });
    }
}