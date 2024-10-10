<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function post_login(Request $request): ?RedirectResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            if (auth()->attempt($credentials)) {
                if (auth()->user()->role_type === User::ROLE_ADMIN) {
                    return redirect()->route('admin.product.index');
                }
                return redirect()->route('customer.order');
            }
            return redirect()->back();
        }catch (Exception $e) {
            return redirect()->route('auth.login')->with('error', $e->getMessage());
        }
    }
    public function post_logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }
}
