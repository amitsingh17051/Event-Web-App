<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('type');
            $table->integer('is_paid');
            $table->integer('event_seats');
            $table->integer('event_available_seats');
            $table->string('event_schedule');
            $table->longText('event_images');
            $table->string('event_address');
            $table->string('event_city');
            $table->string('event_categories');
            $table->longText('description');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    } 
};
