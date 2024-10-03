<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonChiTietTable extends Migration
{
    public function up()
    {
        Schema::create('hoa_don_chi_tiet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_hoa_don');
            $table->unsignedBigInteger('id_product');
            $table->unsignedInteger('quantity');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_hoa_don')->references('id')->on('hoa_don')->onDelete('cascade');
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoa_don_chi_tiet');
    }
}
