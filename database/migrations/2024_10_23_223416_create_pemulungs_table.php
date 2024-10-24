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
        Schema::create('pemulungs', function (Blueprint $table) {
            $table->id("pemulung_id");
            $table->foreignId("user_id")->constrained("users"); // foreign key ke table user
            $table->decimal("total_saldo", 15, 2); // saldo pemulung
            $table->integer("total_koin")->default(0); // koin pemulung
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemulungs');
    }
};
