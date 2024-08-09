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
        Schema::create('contracts', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid("candidate_id");
            $table->foreignUuid("entreprise_id");
            $table->foreignUuid("contract_template_id");
            $table->text("comment")->nullable();
            $table->float("rate")->nullable();
            $table->enum("status", ["pending","ongoing","finished","aborted"]);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
