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
        Schema::create('event_mechanics', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('mechanics_id');



            //idx
            $table->index('event_id', 'event_mechanics_event_idx');
            $table->index('mechanics_id','event_mechanics_mechanics_idx');

            //fk
            $table->foreign('event_id', 'event_mechanics_event_fk')->on('events')->references('id');
            $table->foreign('mechanics_id','event_mechanics_mechanics_fk')->on('mechanics')->references('id');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_mechanics');
    }
};
