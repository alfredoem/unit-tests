<?php

namespace Styde;

use Alfredoem\Container\Application;

class MyApplication extends Application
{

    protected function registerAccessHandler()
    {
        exit('Custom access handler');
    }

}