<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecp', function (Blueprint $table) {
            $table->id();
            $table->string('ecpno', 50)->nullable();
            $table->string('nama');
            $table->string('deskripsi', 500);
            $table->string('desktambahan',5000);
            $table->string('alasan',5000);
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
        Schema::dropIfExists('ecps');
    }
}
