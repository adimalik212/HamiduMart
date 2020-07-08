<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pilih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihs', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->uuid('barang_id', 36);
            $table->double('harga');
            $table->integer('jumlah');
            $table->double('total');
            $table->string('pembeli');
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
