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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('surname',100)->nullable();
            $table->string('family',100)->nullable();
            $table->string('tel',12)->nullable();
            $table->string('extra_contacts',255)->nullable();
            $table->string('contraindications',255)->nullable();
            $table->string('allergies',255)->nullable();
            $table->text('additional')->nullable();
            $table->text('about')->nullable();
            $table->string('email',255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nick_name', 100)->nullable();
            $table->string('link_vk',255)->nullable();
            $table->string('link_tg',255)->nullable();

            $table->string('photo',255)->nullable();
            $table->string('number',100)->nullable();
            $table->date('birthday')->nullable();

            $table->string('driver_license')->nullable();
            $table->boolean('auto')->nullable();
            $table->rememberToken();

            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
