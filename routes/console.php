<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('chems:anthem', function () {
    $total = rand(5, 20);
    for ($i = 0; $i < $total; $i++) {
        $os = rand(1, 10);
        $lomitos = rand(1, 4);
        $this->comment(str_repeat("Chems Lomito, ", $lomitos) . 'Chems lomit' . str_repeat('o', $os));
    }
})->purpose('Sing with all your heart our anthem');