<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */


    protected function redirectTo($request)
    {   
        app()->setLocale("en");
        $lang = app()->getLocale() ?? "en";

        if (Auth::check()) {
            // Redirect logged-in users trying to access login/register
            $currentPath = $request->path();
            if (in_array($currentPath, ['login', 'register'])) {
                return route('admin.home.index', ['locale' => $lang]);
            }
        }

        // Default redirection for unauthenticated users
        if (! $request->expectsJson()) {
            return route('auth.login', ['locale' => $lang]);
        }
    }
}
