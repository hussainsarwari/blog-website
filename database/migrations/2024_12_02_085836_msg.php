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
        Schema::create('msg', function (Blueprint $table) {
            $table->id('msg_id');
            $table->date('date');
            $table->string('name')->unsigned()->nullable();
            $table->string('email')->unsigned()->nullable();
            $table->string('msg')->unsigned()->nullable();
            $table->string('category')->unsigned()->nullable();
            $table->boolean('readed')->nullable()->default(false);

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
