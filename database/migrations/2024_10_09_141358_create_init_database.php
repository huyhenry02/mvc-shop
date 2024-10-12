<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->string('sale');
            $table->integer('price');
            $table->string('description', 255)->nullable();
            $table->string('specification', 255)->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('order_date');
            $table->string('ship_name', 255);
            $table->string('ship_phone', 255);
            $table->string('ship_email', 255);
            $table->string('ship_address', 255);
            $table->integer('total');
            $table->enum('status', ['pending', 'shipping', 'completed'])->default('pending');
            $table->timestamps();
        });
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('sub_total');
            $table->timestamps();
        });
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('sub_total');
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('file_path');
            $table->string('file_name');
            $table->bigInteger('file_size');
            $table->string('mime_type');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('images');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('brands');
    }
};
