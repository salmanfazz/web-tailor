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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->increments('id_detail_pesanans');
            $table->string('lingkar_dada')->nullable();
            $table->string('lingkar_pinggul')->nullable();
            $table->string('lingkar_pinggang')->nullable();
            $table->string('panjang_baju')->nullable();
            $table->string('panjang_lengan')->nullable();
            $table->string('panjang_celana')->nullable();
            $table->string('keterangan');
            $table->text('gambar');
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
        Schema::dropIfExists('detaiil_pesanans');
    }
};
