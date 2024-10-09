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
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->nullable();
              $table->foreignId('workspace_id')->nullable();
             $table->string('name')->nullable();
            $table->string('slug')->nullable();
             $table->string('status')->nullable()->default('workspace');
              $table->string('bg')->nullable();
              $table->string('btn_color')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
