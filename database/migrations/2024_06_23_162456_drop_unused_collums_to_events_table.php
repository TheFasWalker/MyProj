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
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('rotationTechnique');
            $table->dropColumn('warTechnique');
            $table->dropColumn('peoplesCars');
            $table->dropColumn('medicine');
            $table->dropColumn('engeneer');
            $table->dropColumn('sqb');
            $table->dropColumn('liveCamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->boolean('rotationTechnique')->nullable();
            $table->boolean('warTechnique')->nullable();
            $table->boolean('peoplesCars')->nullable();
            $table->boolean('medicine')->nullable();
            $table->boolean('engeneer')->nullable();
            $table->boolean('sqb')->nullable();
            $table->boolean('liveCamp')->nullable();
        });
    }
};
