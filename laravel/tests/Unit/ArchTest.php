<?php

/**
arch()->preset()->php();
arch()->preset()->laravel();
arch()->preset()->security();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->toExtendNothing()
    ->toBeFinal()
    ->toBeReadonly();

arch('value objects')
    ->expect('App\ValueObjects')
    ->toUseNothing();
*/
