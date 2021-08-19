<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);            
            $table->string('company_name')->nullable();         
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();            
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
        Schema::dropIfExists('users');
    }
}
