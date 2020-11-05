<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daihan', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_tc')->unsigned();
            $table->foreign('ma_tc')->references('id')->on('tieuchi')->onDelete('cascade');
            $table->integer('nam');
            $table->bigInteger('xong');
            $table->bigInteger('tong');
            $table->string('ma_truong', 10);
            $table->foreign('ma_truong')->references('id')->on('truong')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daihan');
    }
}
