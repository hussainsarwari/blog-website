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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->string('category');
            $table->string('name')->nullable();
            $table->date('date');
            $table->string('comment_text')->nullable()->default(' ');
            $table->integer('like')->unsigned()->nullable()->default(0);
            $table->integer('reply')->unsigned()->nullable()->default(0);
            $table->integer('blog_id')->unsigned()->index();
            $table->foreign('blog_id')->references('blog_id')->on('blog');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('comments');
    }
};
