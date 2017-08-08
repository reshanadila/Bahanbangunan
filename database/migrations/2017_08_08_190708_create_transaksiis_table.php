<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksiis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barangg')->unsigned();
            $table->integer('id_pembelii')->unsigned();
            $table->timestamps();

             $table->foreign('id_barangg')->references('id')
                ->on('baranggs')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_pembelii')->references('id')
                ->on('pembeliis')->onUpdate('cascade')
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
        Schema::dropIfExists('transaksiis');
    }
}
