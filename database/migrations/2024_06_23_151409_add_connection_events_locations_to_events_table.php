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
            $table->unsignedBigInteger('location_id')->nullable();

            $table->index('location_id', 'event_location_idx');
            $table->foreign('location_id', 'event_location_fk')->on('locations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('event_location_fk');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropIndex('event_location_idx');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('location_id');
        });



    }
};
