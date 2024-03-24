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
        Schema::create('department3_jubo_somaj_dawats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('how_many_young_been_invited')->nullable();
            $table->bigInteger('how_many_young_been_associated')->nullable();

            $table->bigInteger('total_young_committee')->nullable();
            $table->bigInteger('total_young_committee_increased')->nullable();

            $table->bigInteger('total_new_club')->nullable();
            $table->bigInteger('total_new_club_increased')->nullable();

            $table->bigInteger('stablished_club_total_invited')->nullable();
            $table->bigInteger('stablished_club_total_increased')->nullable();

            $table->string('creator', 50)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department3_jubo_somaj_dawats');
    }
};
