<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daily', function (Blueprint $table) {
            $table->id('daily_id');
            $table->string('Saturday')->nullable();
            $table->string('Sunday')->nullable();
            $table->string('Monday')->nullable();
            $table->string('Tuesday')->nullable();
            $table->string('Wednesday')->nullable();
            $table->string('Thursday')->nullable();
            $table->string('Friday')->nullable();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('task_id')->unsigned()->index()->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
            $table->timestamps();
          
        });
    }
    public function down(): void
    {
        //
        Schema::dropIfExists('daily');
    }
};
