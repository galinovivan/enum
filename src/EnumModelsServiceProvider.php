<?php
/**
 * Created by PhpStorm.
 * User: 91178
 * Date: 12.07.2017
 * Time: 23:04
 */

namespace caseweb\EnumModels;

use Illuminate\Support\ServiceProvider;
use caseweb\EnumModels\EnumModels;

class EnumModelsServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->singleton(EnumModels::class, function($app) {
            return new EnumModels();
        });
    }
}