<?php

namespace Finlab\Packages;

use Illuminate\Support\Facades\Route;
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

        // 注册扩展包中的 views ，Laravel 即知道 views 的位置
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'oa-composer-test');

        // 将扩展包的配置文件发布到应用程序本身的 config 目录
        $this->publishes([
            __DIR__ . '/../config/oa-composer-test.php' => config_path('oa-composer-test.php'),
        ]);

        // 注册扩展包中的 routes
        $this->registerRoutes();

    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::group($this->routeWebConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    /**
     * Get the Nova route group configuration array.
     *
     * @return array
     */
    protected function routeWebConfiguration()
    {
        return [
            'namespace'  => 'Finlab\Packages\Http\Controllers',
            'as'         => '',
            'prefix'     => 'oa-composer-test',
            'middleware' => 'web',
        ];
    }
}
