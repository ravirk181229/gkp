<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->integer('min_price');
            $table->integer('max_price');            
            $table->string('price_unit');
            $table->longText('details');
            $table->text('list_details');
            $table->string('video_url');
            $table->string('size');
            $table->string('unit');
            $table->boolean('is_varified')->default(false); 
            $table->boolean('is_sold')->default(false);
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
