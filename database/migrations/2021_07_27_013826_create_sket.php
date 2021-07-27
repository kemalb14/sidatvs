<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sket', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npwp');
            $table->string('no_sket');
            $table->string('penerima_hak');
            $table->string('tanggal');
            $table->string('nominal');
            $table->string('status');
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
        Schema::dropIfExists('sket');
    }
}
