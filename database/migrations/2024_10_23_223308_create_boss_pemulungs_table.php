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
        Schema::create('boss_pemulungs', function (Blueprint $table) {
            $table->id("boss_id");
            $table->foreignId("user_id")->constrained("users"); // Foreign key ke table user
            $table->decimal("saldo", 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boss_pemulungs');
    }
};
