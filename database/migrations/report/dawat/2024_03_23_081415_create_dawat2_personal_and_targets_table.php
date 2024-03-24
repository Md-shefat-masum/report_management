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
        Schema::create('dawat2_personal_and_targets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total_rokon')->nullable();
            $table->bigInteger('total_worker')->nullable();
            $table->bigInteger('how_many_were_give_dawat')->nullable();
            $table->bigInteger('how_many_have_been_invited')->nullable();
            $table->bigInteger('how_many_associate_members_created')->nullable();
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
        Schema::dropIfExists('dawat2_personal_and_targets');
    }
};