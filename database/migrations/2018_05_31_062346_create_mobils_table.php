<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_mobil');
            $table->string('merk');
            $table->string('perseneling');
            $table->string('plat_no');
            $table->string('warna');
            $table->string('tahun_keluaran');
            $table->integer('harga_sewa');
            $table->string('jenis');
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
        Schema::dropIfExists('mobils');
    }
}
