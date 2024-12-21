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
        Schema::create('visitor', function (Blueprint $table) {
            $table->id('visitor_id');
            $table->string('name', 20)->nullable();
            $table->integer('spend_time')->nullable()->default(0);  
            $table->date('date');       
            $table->boolean('blog')->nullable()->default(false); 
            $table->boolean('tools')->nullable()->default(false); 
            $table->boolean('home')->nullable()->default(false); 
            $table->boolean('privacy')->nullable()->default(false);
            $table->boolean('myprofile')->nullable()->default(false);


            $table->integer('blog_id')->unsigned()->index()->nullable();
            $table->foreign('blog_id')->references('blog_id')->on('blog');
            // $table->integer('tools_id')->nullable()->index()->unsigned();
            // $table->foreign('tools_id')->references('tools_id')->on('tools');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('visitor');
    }
};
