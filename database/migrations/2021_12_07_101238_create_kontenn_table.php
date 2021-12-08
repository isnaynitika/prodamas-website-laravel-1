<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontennTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontenn', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //$table->timestamps('tanggal_konten');
            //$table->string('gambar_konten');
            $table->string('judul_konten');
            $table->string('slug_konten');
            $table->string('statusverifikasi');
            //$table->timestamps('tanggal_post');
            $table->string('isi_konten');
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
        Schema::dropIfExists('kontenn');
    }
}
