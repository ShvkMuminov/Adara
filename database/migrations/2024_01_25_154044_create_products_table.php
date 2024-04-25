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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id");
            $table->integer("partner_id");
            $table->string("image")->nullable();
            $table->string("name")->nullable();
            $table->text("about")->nullable();
            $table->text("description")->nullable();
            $table->integer("price")->default(0);
            $table->integer("discount")->default(0);
            $table->integer("caunt")->default(0);
            $table->string("type")->default("future");
            $table->tinyInteger("sizeable")->default(0);
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
