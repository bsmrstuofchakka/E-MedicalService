<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('userId');
            $table->longText('description')->nullable();
            $table->text('month')->nullable();
            $table->text('amount')->nullable();
            $table->text('document')->nullable();
            $table->string('upload')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_models');
    }
}
