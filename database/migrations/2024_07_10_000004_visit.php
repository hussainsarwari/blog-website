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
       Schema::create('visit', function (Blueprint $table) {
           $table->id('visit_id');
           $table->boolean('blog')->nullable()->default(false);
           $table->string('category')->nullable();
           $table->integer('visitor_counter')->nullable()->default(0);


            // $table->integer('blog_id')->unsigned()->index();
            // $table->foreign('blog_id')->references('blog_id')->on('blog');
            // $table->integer('tools_id')->unsigned()->index();
            // $table->foreign('tools_id')->references('tools_id')->on('tools');
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visit');
    
    }
};
