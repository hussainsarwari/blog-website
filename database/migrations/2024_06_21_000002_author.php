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
        Schema::create('author', function (Blueprint $table) {
            $table->id('author_id');
            $table->string('name');
            $table->string('email');
            $table->Integer('phone');
            $table->string('description');
            $table->string('eduction');
            $table->string('category');
            $table->string('date');
            $table->string('dateOfbirth');
            $table->rememberToken();
            $table->timestamps();
          
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        
        Schema::dropIfExists('author');
    }
};
