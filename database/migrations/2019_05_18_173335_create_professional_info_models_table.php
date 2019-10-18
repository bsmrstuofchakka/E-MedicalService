<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalInfoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_info_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('userId');
            $table->text('ladegree')->nullable();
            $table->text('specialization')->nullable();
            $table->text('cdesignation')->nullable();
            $table->text('affiliation')->nullable();
            $table->text('parmaddress')->nullable();
            $table->text('fdesignation')->nullable();
            $table->text('oline1')->nullable();
            $table->text('oline2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_info_models');
    }
}
