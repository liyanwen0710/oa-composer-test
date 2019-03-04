<?php

namespace Finlab\Packages;

use Illuminate\Support\ServiceProvider;

class MD5HasherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', function () {
            return new MD5Hasher();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
