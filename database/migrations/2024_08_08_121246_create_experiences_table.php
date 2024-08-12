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
        Schema::create('experiences', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid("candidate_id");
            $table->string("actual_position")->nullable();
            $table->string("actual_entreprise")->nullable();
            $table->text("description")->nullable();
            $table->json("skills");
            $table->json("domains");
            $table->text("governance_experience")->nullable();
            $table->text("motivation")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
