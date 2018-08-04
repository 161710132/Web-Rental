<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_supir');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('nik');
            $table->string('no_hp');
            $table->text('alamat')->nullable();
            $table->integer('umur');
            $table->integer('harga_sewasupir');
            $table->string('status');
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
        Schema::dropIfExists('supirs');
    }
}
