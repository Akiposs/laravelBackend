<?php

namespace App\Providers;

use App\Services\Impl\RecipeServiceImpl;
use App\Services\Impl\UserServiceImpl;
use App\Services\RecipeService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * 登録する必要のある全コンテナシングルトン
     *
     * @var array
     */
    public $singletons = [
        UserService::class => UserServiceImpl::class,
        RecipeService::class => RecipeServiceImpl::class,
    ];


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
