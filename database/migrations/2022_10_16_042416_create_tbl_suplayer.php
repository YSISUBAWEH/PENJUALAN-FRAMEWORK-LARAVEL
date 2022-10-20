<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSuplayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_suplayer', function (Blueprint $table) {
            $table->id();
            $table->string('id_suplayer');
            $table->string('suplayer_nama');
            $table->string('suplayer_alamat');
            $table->string('suplayer_phone');
            $table->string('suplayer_status');
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
        Schema::dropIfExists('tbl_suplayer');
    }
}
