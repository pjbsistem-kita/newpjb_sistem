<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spv', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('ecpnomor',50);
            $table->string('keputusan_spv')->nullable();
            $table->string('alasan_spv',5000);
            $table->string('nama_spv');
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
        Schema::dropIfExists('spv');
    }
}
