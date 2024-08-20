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
        Schema::create('experts', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->text("photo");
            $table->text("firstname");
            $table->text("lastname");
            $table->text("speciality");
            $table->text("facebook")->nullable();
            $table->text("linkedin")->nullable();
            $table->text("twitter")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
