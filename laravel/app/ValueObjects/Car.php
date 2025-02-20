<?php

namespace App\ValueObjects;

class Car
{
    protected $myUntypedProperty;

    private const string MY_CONST = 'foo';

    public function myUntypedMethod($param)
    {
        return $param + $this->myUntypedProperty + self::MY_CONST;
    }
}
