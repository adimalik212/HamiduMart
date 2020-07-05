<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lapak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('lapaks', function (Blueprint $table) {
        //     $table->uuid('id', 36)->primary();
        //     $table->uuid('user_id', 36);
        //     $table->string('namaLapak');
        //     $table->string('pemilik');
        //     $table->string('url');
        //     $table->timestamps();
        // });
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
