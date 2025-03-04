<?php

use Database\Seeders\DatabaseSeeder;

arch()->preset()->php();
arch()->preset()->laravel();
arch()->preset()->security();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->toExtendNothing();

arch('models')
    ->expect('App\Models')
    ->toOnlyBeUsedIn('App\Repositories')
    ->ignoring(DatabaseSeeder::class);

arch('value objects')
    ->expect('App\ValueObjects')
    ->toUseNothing();
