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
            $table->unsignedInteger('table_number')->nullable(); // nullabel untuk pesanan bawa pulang
            $table->string('customer_name')->nullable(); // untuk pesanan bawa pulang
            $table->decimal('total_price', 15, 2);
            $table->string('status')->default('proses'); // Status: proses, selesai, dibatalkan
            $table->timestamps();
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
