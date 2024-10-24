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
        Schema::create('pulungans', function (Blueprint $table) {
            $table->id("pulungan_id");
            $table->foreignId("pemulung_id")->constrained("pemulung"); // foreign key ke table pemulung
            $table->decimal("berat_pulungan", 8, 2); // berat hasil mulung  
            $table->string("tipe_sampah")->nullable();
            $table->date("tanggal_kumpul");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulungans');
    }
};
