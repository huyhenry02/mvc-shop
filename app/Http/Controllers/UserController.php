<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class UserController extends Controller
{
    public function show_login(): View|Factory|Application
    {
        return view('customer.login');
    }

    public function show_register(): View|Factory|Application
    {
        return view('customer.register');
    }
}
