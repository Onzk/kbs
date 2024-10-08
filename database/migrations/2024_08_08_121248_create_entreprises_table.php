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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("photo")->default("storage/entreprise/default.png");
            $table->string("email")->unique();
            $table->string("name");
            $table->string("sector");
            $table->integer("size");
            $table->string("hq_address")->unique();
            $table->string("website")->nullable();
            $table->text("description");
            $table->string("presentation_movie")->nullable();
            $table->json("links")->nullable();
            $table->string("diversity_policy")->nullable();
            $table->text("password");
            $table->boolean("enabled")->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
