<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihs', function (Blueprint $table) {
            $table->uuid('barang_id', 36)->primary();
            $table->uuid('id', 36);
            $table->double('harga');
            $table->integer('jumlah');
            $table->double('total');
            $table->string('pembeli');
            $table->string('alamat');
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
