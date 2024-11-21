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
            $table->string('email');
            $table->string('category');
            $table->date('createAtdate');
           $table->Integer("visit_counter");
            $table->rememberToken();
            $table->timestamps();
           
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
