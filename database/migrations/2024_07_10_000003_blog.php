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
        Schema::create('blog', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('tags');

            $table->bigInteger('author')->unsigned()->index()->nullable();
            $table->foreign('author_id')->references('author_id')->on('author');
            $table->string('body');
            $table->string('table');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('share')->default(0);
            $table->integer('download')->default(0);
            $table->string('category');
            $table->date('update')->nullable();
            $table->date('create_date');
            $table->integer('lenght')->default(0);
            // 
            // $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
            
    }
};
