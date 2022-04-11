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
        Schema::create('riwayat_iuran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_tenant')->constrained('tenant');
            $table->string('tahun_bulan', 200);
            $table->integer('jml_bayar');
            $table->dateTime('tgl_bayar')->nullable();
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
        Schema::dropIfExists('riwayat_iuran');
    }
};
