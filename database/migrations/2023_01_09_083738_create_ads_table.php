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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('title');
            $table->unsignedInteger('price');
            $table->string('region');
            $table->string('city');
            $table->string('brand');
            $table->string('model');
            $table->string('engine size');
            $table->unsignedTinyInteger('drivers');
            $table->string('description');
            $table->text('content');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('ads');
    }
};
