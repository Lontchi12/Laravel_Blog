<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function flush(){
        auth()->logout();

        return redirect()->route('welcome');
    }
}
