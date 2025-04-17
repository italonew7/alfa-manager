<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

abstract class Controller
{
    public function show()
    {
        return view('auth.register');
    }
}
