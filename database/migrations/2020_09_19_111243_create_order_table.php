<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim', 255);
            $table->string('telepon_pengirim', 20);
            $table->longText('alamat_pengirim');
            $table->string('email', 255);
            $table->set('jenis', ['darat', 'laut', 'udara', 'sewa']);
            $table->integer('jumlah');
            $table->integer('berat');
            $table->string('nama_penerima', 255);
            $table->string('telepon_penerima', 20);
            $table->longText('pesan')->nullable();
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
        Schema::dropIfExists('order');
    }
}
