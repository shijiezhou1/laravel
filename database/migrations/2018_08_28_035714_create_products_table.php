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
        //用下面这个comment 来建立一个table
        //php artisan make:migration create_products_table --create=products
        //制作你想要的table 包括id name 和detail 等等
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 可能你想delete的 用down
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
