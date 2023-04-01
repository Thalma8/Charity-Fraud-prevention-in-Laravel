<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PasswordValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //


    Validator::extend('password_restrictions', function ($attribute, $value, $parameters, $validator) {
        // Define your password restrictions here
        $hasUppercase = preg_match('/[A-Z]/', $value);
        $hasLowercase = preg_match('/[a-z]/', $value);
        $hasSpecialChar = preg_match('/[\W]/', $value);
        $isValidLength = strlen($value) >= 8;
        
        return $hasUppercase && $hasLowercase && $hasSpecialChar && $isValidLength;
    });
}

    }

