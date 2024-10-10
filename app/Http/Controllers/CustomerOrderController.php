<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class CustomerOrderController extends Controller
{

    public function show_order(): View|Factory|Application
    {
        return view('customer.order');
    }
    public function show_cart(): View|Factory|Application
    {
        return view('customer.cart');
    }
    public function show_checkout(): View|Factory|Application
    {
        return view('customer.checkout');
    }
}
