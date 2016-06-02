<?php

namespace Styde\Facades;

use Alfredoem\Container\Facade;

class Access extends Facade
{

    public static function getAccessor()
    {
        return 'access';
    }

}