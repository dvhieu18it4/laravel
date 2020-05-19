<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTchuyendisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTchuyendi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lichtrinh_id');
            $table->string('thoigiandung')->nullable();
            $table->string('ghichu')->nullable();
            $table->foreign('lichtrinh_id')
            ->references('id')->on('lichtrinh');
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
        Schema::dropIfExists('CTchuyendi');
    }
}
