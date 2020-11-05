<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieuchi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten', 200)->nullable(false);
            $table->text('moTa')->nullable();
            $table->integer('ma_dv')->unsigned();
            $table->foreign('ma_dv')->references('id')->on('donvi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tieuchi');
    }
}
