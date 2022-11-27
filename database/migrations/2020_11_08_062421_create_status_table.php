<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id('id_status');
            $table->enum('status', ['benar','salah']);
            $table->foreignId('id_soal')->references('id_soal')->on('soals')->onDelete('cascade')->nullable();
            $table->index('id_user');
            $table->foreignId('id_user')->references('id_user')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('status', function (Blueprint $table) {
        $table->dropForeign('status_id_user_foreign');
        $table->dropIndex('lists_id_user_index');
        $table->dropColumn('id_user');
        $table->dropForeign('status_id_soal_foreign');
        $table->dropIndex('lists_id_soal_index');
        $table->dropColumn('id_soal');
        });
    }
}
