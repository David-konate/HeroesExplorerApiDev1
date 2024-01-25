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
    Schema::create('hero_skill', function (Blueprint $table) {
        $table->id();

        $table->bigInteger('hero_id')->unsigned()->nullable();
        $table->bigInteger('skill_id')->unsigned()->nullable();

        $table->timestamps();

        $table->foreign('hero_id')->references('id')->on('heroes')->onDelete('cascade');
        $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_skill');
    }
};
