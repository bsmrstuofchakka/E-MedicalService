<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineeInfoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee_info_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('userId');
            $table->text('nname')->nullable();
            $table->text('nfname')->nullable();
            $table->text('nmname')->nullable();
            $table->text('nsname')->nullable();
            $table->text('nsex')->nullable();
            $table->string('ndate')->nullable();
            $table->text('nnationality')->nullable();
            $table->text('nnid')->nullable();
            $table->text('npaddress')->nullable();
            $table->text('npresentaddress')->nullable();
            $table->text('isign')->nullable();
            $table->string('nphoto')->nullable();

        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominee_info_models');
    }
}
