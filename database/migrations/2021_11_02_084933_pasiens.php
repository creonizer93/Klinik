<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pasiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lhr');
            $table->string('jk');
            $table->text('alamat');
            $table->string('hp');
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan');
            $table->integer('no_bpjs');
            $table->text('alergi');
            $table->dateTime('created_time');
            $table->dateTime('updated_time');
            $table->tinyInteger('deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
