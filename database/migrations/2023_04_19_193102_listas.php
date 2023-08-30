<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Listas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('herramienta_id');
            $table->unsignedBigInteger('camioneta_id');
            $table->boolean("check")->default(false);;
            $table->foreign('herramienta_id')->references('id')->on('herramientas')->onDelete('cascade');
            $table->foreign('camioneta_id')->references('id')->on('camiones')->onDelete('cascade');
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
        //
    }
}
