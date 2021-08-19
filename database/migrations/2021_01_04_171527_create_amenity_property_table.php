<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_property', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amenity_id')->unsigned();
            $table->bigInteger('property_id')->unsigned();
            $table->timestamps();
            $table->foreign('amenity_id')
                  ->references('id')->on('amenities')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('amenity_property');
    }
}
