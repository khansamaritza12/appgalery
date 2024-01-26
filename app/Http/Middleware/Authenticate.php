<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
            return $request->exceptJson() ? null : route('login');
        }
        public function logout()
        {
           session()->flush();
           Auth::logout();
    
           return redirect('admin');
        }
    }
