<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('notelepon');
            $table->date('tanggalordermasuk');
            $table->date('tanggalorderkeluar')->nullable();
            $table->string('jenispaket');
            $table->string('alamat');
            $table->string('keterangan');
            $table->string('berat')->nullable();
            $table->string('harga')->nullable();
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
        Schema::dropIfExists('table_elaundry');
    }
};
