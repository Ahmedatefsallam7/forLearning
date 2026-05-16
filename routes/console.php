<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
Artisan::command('sayHello {name}  {--a|all=}', function () {
    $this->info('Hello ' . $this->argument('name') . ' ' . $this->option('all'));
})->purpose('Print Ahmed');
