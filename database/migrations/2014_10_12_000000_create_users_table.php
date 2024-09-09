<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('img')->nullable();
            $table->string('bio')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('rate')->nullable();
            $table->integer('today_rating')->nullable();
            $table->integer('completed_session')->nullable();
            $table->integer('today_completed_session')->nullable();
            $table->integer('total_hours_study')->nullable();
            $table->integer('average_working_hours')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
