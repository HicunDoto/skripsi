<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id('id_soal');
            $table->string('nama_soal');
            $table->enum('kategori', ['web','server']);
            $table->enum('nilai', ['25','50','100']);
            $table->string('keterangan');
            $table->string('clue');
            $table->enum('aktif_soal',['aktif','tidak']);
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
        Schema::dropIfExists('soals');
    }
}
