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
        Schema::create('riwayat_pemilikan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_tenant')->constrained('tenant');
            $table->dateTime('tgl_penjualan')->nullable();
            $table->dateTime('tgl_pembelian')->nullable();
            $table->foreignId('id_pemilik_lama')->constrained('pemilik')->nullable();
            $table->foreignId('id_pemilik_baru')->constrained('pemilik')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('edited_by')->constrained('users');
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
        Schema::dropIfExists('riwayat_pemilikan');
    }
};
