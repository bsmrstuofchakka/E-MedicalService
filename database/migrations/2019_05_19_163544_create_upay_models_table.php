<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpayModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upay_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('userId');
            $table->string('date')->nullable();
            $table->text('deposite')->nullable();
            $table->longText('description')->nullable();
            $table->text('document')->nullable();
            $table->text('amount')->nullable();
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
        Schema::dropIfExists('upay_models');
    }
}
