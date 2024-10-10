<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
class AdminOrderController extends Controller
{
    public function show_index(): View|Factory|Application
    {
        return view('admin.order.index');
    }

    public function show_update(): View|Factory|Application
    {
        return view('admin.order.update');
    }

    public function show_customer(): View|Factory|Application
    {
        return view('admin.customer.index');
    }
}
