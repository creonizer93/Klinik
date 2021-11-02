<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Obats extends Migration
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
            $table->string('nama_obat');
            $table->string('sediaan');
            $table->integer('dosis');
            $table->string('satuan');
            $table->integer('stok');
            $table->integer('harga');
            $table->integer('no_bpjs');
            $table->text('alergi');
            $table->timestamp('created_time');
            $table->timestamp('updated_time');
            $table->tinyInteger('deleted')->default(0)->nullable();
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
