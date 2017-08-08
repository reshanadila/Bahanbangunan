<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeliis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barangg')->unsigned();
            $table->string('nama');
            $table->text('alamat');
            $table->integer('nohp');
            $table->string('jk');
            $table->timestamps();

            $table->foreign('id_barangg')->references('id')
                ->on('baranggs')->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeliis');
    }
}
