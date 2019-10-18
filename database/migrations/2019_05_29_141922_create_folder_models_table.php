<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('date')->nullable();
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('folder_models');
    }
}
