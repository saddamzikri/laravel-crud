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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Kolom untuk nama produk
            $table->text('description')->nullable(); // Kolom untuk deskripsi produk, bisa null
            $table->decimal('price', 10, 2); // Kolom untuk harga produk dengan dua digit desimal
            $table->integer('stock'); // Kolom untuk jumlah stok produk
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
