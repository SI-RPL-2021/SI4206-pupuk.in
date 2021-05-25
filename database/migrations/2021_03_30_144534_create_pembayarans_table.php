<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petani_id')->foreign('petani_id')->references('id')->on('petanis');
            $table->foreignId('distributor_id')->foreign('distributor_id')->references('id')->on('distributors');
            $table->foreignId('pupuk_id')->foreign('pupuk_id')->references('id')->on('pupuks');
            $table->double('jumlah_pengambilan');
            $table->double('jumlah_pembayaran')->nullable();
            $table->string('status')->default('belum dibayar');
            $table->string('metode')->nullable();
            $table->foreignId('tempat_pengambilan_id')->foreign('tempat_pengambilan_id')->references('id')->on('tempat_pengambilans');
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
        Schema::dropIfExists('pembayarans');
    }
}
