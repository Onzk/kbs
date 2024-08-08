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
        Schema::create("configs", function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->integer("min_year");
            $table->string("linkedin")->nullable();
            $table->string("facebook")->nullable();
            $table->string("tweeter")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("configs");
    }
};
