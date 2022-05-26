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
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');

            $table->bigInteger('pasiente_id')->unsigned();
            $table->string('nombre')->required();
            $table->timestamps();

            $table->foreign('pasiente_id')->references('id')->on('pasiente')->onDelete('cascade');
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
