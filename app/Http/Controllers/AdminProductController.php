<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
class AdminProductController extends Controller
{
    public function show_index(): View|Factory|Application
    {
        return view('admin.product.index');
    }

    public function show_create(): View|Factory|Application
    {
        return view('admin.product.create');
    }

    public function show_update(): View|Factory|Application
    {
        return view('admin.product.update');
    }
}
