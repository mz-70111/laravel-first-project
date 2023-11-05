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
        Schema::create('permisions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('offices_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('users_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('addcost');
            $table->boolean('showallcosts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisions');
    }
};
