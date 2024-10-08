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
        Schema::create("webinaries", function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title")->unique();
            $table->string("photo");
            $table->string("video")->nullable();
            $table->string("url");
            $table->dateTime("datetime");
            $table->string("description");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("webinaries");
    }
};
