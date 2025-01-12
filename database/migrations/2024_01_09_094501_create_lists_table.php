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
        Schema::create('card_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('board_id')->nullable();
            $table->string('order_position')->nullable();
            $table->string('new_order_position')->nullable();
             $table->string('title')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_lists');
    }
};
