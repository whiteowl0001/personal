<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLwproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lwproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motorcycle_title');
            $table->string('stock');
            $table->string('color');
            $table->string('condition');
            $table->integer('milage');
            $table->integer('price');
            $table->string('motorcycle_image');
            $table->integer('year');
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
        Schema::dropIfExists('lwproducts');
    }
}
