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
        Schema::create('candidates', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->text("photo")->nullable();
            $table->string("last_name");
            $table->string("first_name");
            $table->string("default_comment")->nullable();
            $table->float("default_rate")->nullable();
            $table->string("email")->unique();
            $table->string("tel")->unique();
            $table->string("linkedin")->nullable();
            $table->string("country");
            $table->text("domain");
            $table->boolean("enabled")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
