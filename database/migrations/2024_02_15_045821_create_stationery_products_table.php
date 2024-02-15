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
        Schema::create('stationery_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('maker_id');
            $table->uuid('collection_id')->nullable();
            $table->enum('type', ['ink','pen']);
            $table->string('slug');
            $table->string('title');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationery_products');
    }
};
