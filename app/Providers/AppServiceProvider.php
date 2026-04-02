<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\ArticleResource;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        ArticleResource::withoutWrapping();
    }
}
