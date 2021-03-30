<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatPengambilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_pengambilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('distributor_id')->foreign('distributor_id')->references('id')->on('distributors');
            $table->string('nama_tempat');
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
        Schema::dropIfExists('tempat_pengambilans');
    }
}
