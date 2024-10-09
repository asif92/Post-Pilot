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
        Schema::create('card_images', function (Blueprint $table) {
            $table->id();
             $table->foreignId('card_list_id')->nullable();

              $table->foreignId('card_id')->nullable();
              $table->string('link')->nullable();
              $table->string('make_cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_images');
    }
};
