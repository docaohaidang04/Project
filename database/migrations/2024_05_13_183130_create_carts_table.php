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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_order'); // Loại bỏ ->nullable()
            $table->string('name');
            $table->string('image')->nullable();
            $table->decimal('price', 10, 2); // Giả sử giá có đến 10 chữ số trước dấu phẩy và 2 chữ số sau dấu phẩy
            $table->integer('quantity');
            $table->string('size')->nullable();
            $table->decimal('total', 10, 2); // Tính tổng thành tiền
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
