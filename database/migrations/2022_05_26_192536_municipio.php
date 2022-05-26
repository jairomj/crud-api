<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('municipio', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');

            $table->bigInteger('departamento_id')->unsigned();

            $table->string('nombre')->required();

            $table->timestamps();
            $table->foreign('departamento_id')->references('id')->on('departamento');
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
};
