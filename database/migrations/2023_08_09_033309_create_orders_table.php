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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('status', ['in_process', 'canceled', 'finished', 'paid'])->default('in_process');
            $table->string('user_name');
            $table->string('user_street');
            $table->string('user_house');
            $table->string('user_apartment')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->text('order_notes')->nullable();
            $table->enum('pay', ['card', 'cash'])->default('cash');
            $table->float('total_sum')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
