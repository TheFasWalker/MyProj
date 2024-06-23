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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('eventLink')->nullable();
            $table->string('timeStart')->nullable();
            $table->date('dateStart')->nullable();
            $table->string('timeStop')->nullable();
            $table->date('dateStop')->nullable();
            $table->text('descriptionShort')->nullable();
            $table->text('script')->nullable();

            $table->string('previewPhoto')->nullable();

            $table->unsignedBigInteger('organizator_id')->nullable();
            $table->unsignedBigInteger('responsible_id')->nullable();

            $table->timestamps();

            $table->index('responsible_id','event_user_idx');
            $table->foreign('responsible_id','event_user_fk')->on('users')->references('id');

            $table->index('organizator_id','event_organizer_idx');
            $table->foreign('organizator_id','event_organizer_fk')->on('events')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
