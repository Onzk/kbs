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
        Schema::create('positions', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid("entreprise_id");
            $table->string("title");
            $table->string("description");
            $table->string("skills");
            $table->string("experiences");
            $table->enum("remuneration", ["salary_range", "package"]);
            $table->string("workplace");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
