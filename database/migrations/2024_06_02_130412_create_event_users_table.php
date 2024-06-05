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
        Schema::create('event_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');

            $table->timestamps();



            $table->index('user_id','user_event_user_idx');
            $table->index('event_id','user_event_event_idx');

            $table->foreign('user_id','user_event_user_fk')->on('users')->references('id');
            $table->foreign('event_id','user_event_event_fk')->on('events')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_users');
    }
};
