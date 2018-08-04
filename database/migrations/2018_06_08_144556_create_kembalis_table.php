<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembalis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_kembali_akhir');
            $table->integer('jumlah_hari');
            $table->integer('telat');
            $table->integer('denda');
            $table->integer('total_harga');
            $table->UnsignedInteger('rental_id');
            $table->foreign('rental_id')->references('id')->on('rentals')->onDelete('cascade');
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
        Schema::dropIfExists('kembalis');
    }
}
