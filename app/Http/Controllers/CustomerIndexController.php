<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class CustomerIndexController extends Controller
{
    public function show_index(): View|Factory|Application
    {
        return view('customer.index');
    }

    public function show_cart(): View|Factory|Application
    {
        return view('customer.cart');
    }

    public function show_checkout(): View|Factory|Application
    {
        return view('customer.checkout');
    }

    public function show_productDetail(): View|Factory|Application
    {
        return view('customer.product_detail');
    }

    public function show_shop(): View|Factory|Application
    {
        return view('customer.shop');
    }

    public function show_about(): View|Factory|Application
    {
        return view('customer.about');
    }
    public function show_contact(): View|Factory|Application
    {
        return view('customer.contact');
    }
}
