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
        //
        Schema::create('weekly', function (Blueprint $table) {
            $table->id('weekly_id');
            $table->string('week1')->nullable();
            $table->string('week2')->nullable();
            $table->string('week3')->nullable();
            $table->string('week4')->nullable();
            $table->string('pweek1')->nullable();
            $table->string('pweek2')->nullable();
            $table->string('pweek3')->nullable();
            $table->string('pweek4')->nullable();

            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('task_id');
            $table->rememberToken();
            $table->timestamps();
          
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
        Schema::dropIfExists('weekly');
    }
    
};
