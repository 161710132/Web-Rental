<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik_kons');
            $table->string('nama_kons');
            $table->string('jk_kons');
            $table->text('alamat')->nullable();
            $table->string('no_hp');
            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->integer('jumlah_hari');
            $table->integer('total_sewa');
            $table->UnsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
            $table->UnsignedInteger('supir_id');
            $table->foreign('supir_id')->references('id')->on('supirs')->onDelete('cascade');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('rentals');
    }
}
