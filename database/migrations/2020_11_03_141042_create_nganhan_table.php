<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNganhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nganhan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_tc')->unsigned();
            $table->foreign('ma_tc')->references('id')->on('daihan')->onDelete('cascade');
            $table->bigInteger('xong');
            $table->bigInteger('tong');
            $table->integer('nam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nganhan');
    }
}
