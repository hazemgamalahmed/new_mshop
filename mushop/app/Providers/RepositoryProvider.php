<?php

namespace App\Providers;

use App\Repository\Category\categoryRepository;
use App\Repository\Category\categoryRepositoryInterface;
use App\Repository\Product\productRepository;
use App\Repository\Product\productRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(categoryRepositoryInterface::class, categoryRepository::class);
        $this->app->bind(productRepositoryInterface::class, productRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
