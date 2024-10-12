<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class AdminOrderController extends Controller
{
    public function show_index(): View|Factory|Application
    {
        $orders = Order::all();
        return view('admin.order.index',
            [
                'orders' => $orders
            ]);
    }

    public function show_update(Order $model): View|Factory|Application
    {
        return view('admin.order.update',
            [
                'model' => $model
            ]);
    }

    public function show_customer(): View|Factory|Application
    {
        $customers = User::where('role_type', User::ROLE_CUSTOMER)->get();
        return view('admin.customer.index',
            [
                'customers' => $customers
            ]);
    }

    public function update(Request $request, Order $model): RedirectResponse
    {
        try {
            $model->status = $request->status;
            $model->save();
            return redirect()->route('admin.order.index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
