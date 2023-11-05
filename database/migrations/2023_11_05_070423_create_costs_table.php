<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('costname');
            $table->integer('cost')->nullable();
            $table->string('costdetails')->nullable();
            $table->boolean('accept')->nullable();
            $table->foreignId('offices_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('users_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('accebted_by')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('createddate')->nullable();
            $table->timestamp('editdate')->nullable();
            $table->timestamp('acceptdate')->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE costs ADD attach MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};
