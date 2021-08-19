<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlorePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flore_plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id')->unsigned();
            $table->string('img');
            $table->string('thumb');
            $table->timestamps();
            $table->foreign('property_id')
                  ->references('id')->on('properties')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flore_plans');
    }
}
