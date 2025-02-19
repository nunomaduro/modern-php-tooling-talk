<?php

namespace App\ValueObjects;

class Person
{
    /**
     * Create a new Person instance.
     */
    public function __construct(protected string $name)
    {
        //
    }

    /**
     * Get the person's namee.
     */
    public function getNamee(): string
    {
        return $this->name;
    }
}

