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
        Schema::create('org_wards', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->integer('no')->nullable();      //ward number
            $table->text('description')->nullable();
            $table->bigInteger('org_type_id')->nullable();
            $table->bigInteger('org_area_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_wards');
    }
};