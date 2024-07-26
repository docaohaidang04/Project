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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('receiver_name');
            $table->string('receiver_address');
            $table->string('receiver_phone');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->tinyInteger('status')->default(0); // Giả sử trạng thái là một số nguyên nhỏ, có thể thay đổi theo yêu cầu
            $table->tinyInteger('payment_method')->default(0); // Phương thức thanh toán: 0 - Tiền mặt, 1 - Thẻ thanh toán
            $table->timestamp('order_date')->nullable();
            $table->decimal('total_amount', 10, 2); // Tính tổng thành tiền
            $table->timestamp('status_updated_at')->nullable();

            // Khóa ngoại
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
