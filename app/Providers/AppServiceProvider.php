<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use packages\Recipe\Domain\Repository\RecipeRepositoryInterface;
use packages\Recipe\Infrastructure\RepositoryImpl\RecipeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RecipeRepositoryInterface::class, function ($app) {
            return new RecipeRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
