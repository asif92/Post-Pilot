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
        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();
             $table->string('name')->nullable();
             $table->string('description');
             $table->string('link')->nullable();
              $table->string('status')->nullable()->default('Private');
              $table->string('image')->nullable();
              $table->string('count_member')->nullable();
              $table->foreignId('user_id')->nullable();
               $table->foreignId('brand_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workspaces');
    }
};
