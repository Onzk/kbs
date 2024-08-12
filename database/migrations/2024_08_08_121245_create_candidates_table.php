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
            $table->string("photo")->default('storage/candidate/default.png');
            $table->string("lastname");
            $table->string("firstname");
            $table->string("default_comment")->nullable();
            $table->float("default_rate")->nullable();
            $table->string("email")->unique();
            $table->string("tel")->unique();
            $table->string("linkedin")->nullable();
            $table->string("country");
            $table->text("domain");
            $table->integer("nbyear");
            $table->text("password");
            $table->text("about")->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
