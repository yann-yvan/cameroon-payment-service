<?php

namespace paymentCm\Dohone\Facades;

use Illuminate\Support\Facades\Facade;

class Dohone extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dohone';
    }
}
