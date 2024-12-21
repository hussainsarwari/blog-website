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
        Schema::create('media', function (Blueprint $table) {
            $table->id('media_id');
            $table->string('name', 100);
            $table->string('alt', 100);
            $table->string('url');
            $table->integer('blog_id')->nullable()->index();
            $table->foreign('blog_id')->references('blog_id')->on('blog');
            $table->integer('author_id')->nullable()->index();
            $table->foreign('author_id')->references('author_id')->on('author');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
