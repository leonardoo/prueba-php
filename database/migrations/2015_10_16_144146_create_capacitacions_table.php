<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema');
            $table->date('date_training');
            $table->integer('capacitador_id')->unsigned();
            $table->foreign('capacitador_id')->references('id')->on('capacitadors');
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
        Schema::drop('capacitacions');
    }
}
