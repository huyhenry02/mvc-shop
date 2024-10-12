<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class AdminProductController extends Controller
{
    public function show_index(): View|Factory|Application
    {
        $products = Product::all();
        return view('admin.product.index',
            [
                'products' => $products
            ]);
    }

    public function show_create(): View|Factory|Application
    {
        $brands = Brand::all();
        return view('admin.product.create',
            [
                'brands' => $brands
            ]);
    }

    public function show_update(Product $model): View|Factory|Application
    {
        $brands = Brand::all();
        return view('admin.product.update',
            [
                'model' => $model,
                'brands' => $brands
            ]);
    }

    public function delete(Product $model): RedirectResponse
    {
        try {
            $model->orderDetails()->delete();
            $model->delete();
            return redirect()->route('admin.product.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function store(Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            if ($request->hasFile('image')) {
                $input['image'] = $this->handleUploadImage($request);
            }
            $product = new Product();
            $product->fill($input);
            $product->save();
            DB::commit();
            return redirect()->route('admin.product.index');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function edit(Product $model, Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            if ($request->hasFile('image')) {
                $input['image'] = $this->handleUploadImage($request);
            }
            $model->fill($input);
            $model->save();
            DB::commit();
            return redirect()->route('admin.product.index');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function handleUploadImage($request): string
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storePubliclyAs('images/products', $imageName);
        return asset('storage/' . $imagePath);
    }
}
