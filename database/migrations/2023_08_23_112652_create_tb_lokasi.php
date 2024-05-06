<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('post_view');
            $table->string('nama_lokasi');
            $table->string('garis_lintang');
            $table->string('garis_bujur');
            $table->string('informasi');
            $table->string('gambar');
            $table->string('post_link');
            $table->string('objek_wisata');
            $table->string('post_status');
            $table->foreignId('user_id')
            ->constrained('tb_user')
            ->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

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
        Schema::dropIfExists('tb_lokasi');
    }
}
