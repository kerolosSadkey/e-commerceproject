<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('idproduct');
            $table->string('nameproduct');
            $table->string('catproduct');
            $table->string('description');
            $table->integer('quentityproduct');
            $table->float('priceproduct');
            $table->string('imageproduct');
            $table->integer('idcat')->unsigned();
           $table->foreign('idcat')->references('idcategory')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
