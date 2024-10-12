<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class CustomerOrderController extends Controller
{

    public function show_order(): View|Factory|Application
    {
        $orders = Order::where('user_id', auth()->id())->get();

        $data = $orders->map(function ($order) {
            return [
                'code' => $order->code,
                'order_date' => $order->order_date,
                'status' => $order->status,
                'total' => $order->total,
                'items' => $order->orderDetails->map(function ($item) {
                    return [
                        'product_name' => $item->product->name,
                        'quantity' => $item->quantity,
                        'size' => $item->size,
                        'sub_total' => number_format($item->sub_total, 0, ',', '.'),
                    ];
                })->toArray()
            ];
        });
        return view('customer.order',
            [
                'data' => $data
            ]);
    }
    public function show_cart(): View|Factory|Application
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $totalCart = $cartItems->sum('sub_total');
        return view('customer.cart',
            [
                'cartItems' => $cartItems,
                'totalCart' => $totalCart
            ]);
    }
    public function show_checkout(): View|Factory|Application
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $totalCart = $cartItems->sum('sub_total');
        return view('customer.checkout',
            [
                'totalCart' => $totalCart
            ]);
    }

    public function addToCart(Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['user_id'] = auth()->id();
            $input['quantity'] = $request->has('quantity') ? $request->quantity : 1;
            $input['sub_total'] = Product::find($request->product_id)->price * $input['quantity'];
            $input['size'] = $request->size ?? '38';

            $cart = new Cart();
            $cart->fill($input);
            $cart->save();
            DB::commit();
            return redirect()->route('customer.cart')->with('success', 'Add to cart successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('customer.shop')->with('error', $e->getMessage());
        }
    }

    public function removeCartItem(Cart $model): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $model->delete();
            DB::commit();
            return redirect()->route('customer.cart')->with('success', 'Remove item from cart successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('customer.cart')->with('error', $e->getMessage());
        }
    }

    public function post_checkout(Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['user_id'] = auth()->id();
            $input['order_date'] = date('Y-m-d');
            $input['code'] = 'OD' . date('Ymd') . '-' . $input['user_id'] . '/' . random_int(1, 100);
            $input['status'] = Order::STATUS_PENDING;
            $cartItems = Cart::where('user_id', auth()->id())->get();
            $input['total'] = $cartItems->sum('sub_total');
            $order = new Order();
            $order->fill($input);
            $order->save();

            foreach ($cartItems as $cartItem) {
                $inputOrderDetail = [
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'sub_total' => $cartItem->sub_total,
                    'size' => $cartItem->size
                ];
                $orderDetail = new OrderDetail();
                $orderDetail->fill($inputOrderDetail);
                $orderDetail->save();
                $cartItem->delete();
            }
            DB::commit();
            return redirect()->route('customer.order');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('customer.cart')->with('error', $e->getMessage());
        }
    }

}
