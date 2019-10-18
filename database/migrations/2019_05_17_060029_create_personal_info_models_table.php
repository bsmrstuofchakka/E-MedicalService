<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('userId');
            $table->text('title')->nullable();
            $table->text('firstname')->nullable();
            $table->text('middlename')->nullable();
            $table->text('lastname')->nullable();
            $table->string('date')->nullable();
            $table->text('sex')->nullable();
            $table->text('nationality')->nullable();
            $table->text('nid')->nullable();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_info_models');
    }
}
