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
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('gender')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('image');
            $table->integer('price');
            $table->integer('size');
            $table->string('shell_material');
            $table->string('chain_material');
            $table->string('glass_material');
            $table->integer('presure');
            $table->string('guarantee');
            $table->string('description')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('special')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
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
