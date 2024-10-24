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
        Schema::create('penukarans', function (Blueprint $table) {
            $table->id("penukaran_id");
            $table->foreignId("boss_id")->constrained("boss"); // foreign ke boss
            $table->foreignId("pulungan_id")->constrained("pulungan"); // foreign ke pulungan
            $table->enum("status", ['b', 'p', 'g'])->default("p");
            $table->date("tanggal_tuker");
            $table->decimal("berat_tuker", 8, 2);
            $table->decimal("saldo_hasil_tuker", 15, 2);
            $table->integer("koin")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penukarans');
    }
};
