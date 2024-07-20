<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\AppLayout;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::component('dasboard', AppLayout::class);
    }
}
