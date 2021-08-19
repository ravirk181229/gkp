<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id')->unsigned();
            $table->string('ad_line_1');
            $table->string('ad_line_2');
            $table->string('land_mark');
            $table->string('pin_code');
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('state_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->timestamps();
            $table->foreign('property_id')
                  ->references('id')->on('properties')
                  ->onDelete('cascade');
            $table->foreign('country_id')
                  ->references('id')->on('countries')
                  ->onDelete('cascade');
            $table->foreign('state_id')
                  ->references('id')->on('states')
                  ->onDelete('cascade');
            $table->foreign('city_id')
                  ->references('id')->on('cities')
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
        Schema::dropIfExists('addresses');
    }
}
