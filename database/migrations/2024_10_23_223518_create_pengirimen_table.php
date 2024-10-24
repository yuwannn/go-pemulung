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
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->id("pengiriman_id");
            $table->text("tujuan_pengiriman");
            $table->text("asal_pengiriman");
            $table->decimal("harga_kirim", 15, 2);
            $table->enum("status", ['b', 'p', 'g']);
            $table->decimal("berat_barang", 8, 2);
            $table->decimal("jarak_pengiriman", 8, 2);
            $table->string("no_resi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimen');
    }
};
