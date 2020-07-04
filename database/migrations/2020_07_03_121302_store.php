<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Store extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->uuid('lapak_id', 36);
            $table->string('namaBarang');
            $table->string('kategori');
            $table->integer('harga');
            $table->integer('bobot');
            $table->string('kondisi');
            $table->string('deskripsi');
            $table->string('photo');
            $table->string('url');
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
        //
    }
}
