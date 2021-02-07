<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->double('price', 8, 2);
            $table->boolean('featured')->default(false);
            $table->enum('purpose', ['rent']);
            $table->enum('type', ['house', 'apartment', 'seat']);
            $table->string('image')->nullable();
            $table->string('bedroom');
            $table->string('bathroom')->nullable();
            $table->string('city')->nullable();
            $table->string('city_slug')->nullable();
            $table->string('address');
            $table->string('area');
            $table->integer('agent_id');
            $table->text('description')->nullable();
            $table->string('video')->nullable();
            $table->string('floor_plan')->nullable();
            $table->string('location_latitude')->nullable();
            $table->string('location_longitude')->nullable();
            $table->text('nearby')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
