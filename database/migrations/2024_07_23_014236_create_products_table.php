<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->unsignedBigInteger('price');
            $table->unsignedInteger('discount')->default(0);
            $table->text('content');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('idCate');
            $table->unsignedBigInteger('idBrand');
            $table->unsignedBigInteger('in_stock');
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('idCate')->references('id')->on('categories');
            $table->foreign('idBrand')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
