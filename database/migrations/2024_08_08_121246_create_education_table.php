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
        Schema::create("education", function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid("candidate_id");
            $table->string("level");
            $table->string("domain");
            $table->string("insitute");
            $table->string("year");
            $table->string("country");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
