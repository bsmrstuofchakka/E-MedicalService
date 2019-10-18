<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_info_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
           $table->bigInteger('userId');
            $table->text('cnumber')->nullable();
            $table->text('email')->nullable();
            $table->text('fname')->nullable();
            $table->text('mname')->nullable();
            $table->text('paddress')->nullable();
            $table->text('contactEmergency')->nullable();
            $table->text('relationship')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_info_models');
    }
}
