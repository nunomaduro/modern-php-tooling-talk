<?php

/**
arch()->preset()->php();
arch()->preset()->laravel();
arch()->preset()->security();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->toExtendNothing();

arch('models')
    ->expect('App\Models')
    ->toOnlyBeUsedIn('App\Repositories')
    ->ignoring(\Database\Seeders\DatabaseSeeder::class);

arch('value objects')
    ->expect('App\ValueObjects')
    ->toUseNothing();
*/
