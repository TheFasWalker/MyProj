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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string('orgGroupName');
            $table->string('orgGroupLink')->nullable();
            $table->string('orgName')->nullable();
            $table->string('orgLink')->nullable();
            $table->string('orgphoto')->nullable();
            $table->boolean('rotationTechnique')->nullable();
            $table->boolean('warTechnique')->nullable();
            $table->boolean('peoplesCars')->nullable();
            $table->boolean('medicine')->nullable();
            $table->boolean('engeneer')->nullable();
            $table->longText('description')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};

