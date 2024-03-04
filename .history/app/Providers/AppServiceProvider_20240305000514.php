<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('file_extension', function ($attribute, $value, $parameters, $validator) {
            $allowedExtensions = $parameters[0];
            $extension = $value->getClientOriginalExtension();

            return in_array($extension, $allowedExtensions);
        });

        Validator::replacer('file_extension', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':values', implode(', ', $parameters), $message);
        });
    }
}
