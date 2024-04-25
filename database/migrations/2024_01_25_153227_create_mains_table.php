<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string("site_title")->nullable();
            $table->string("site_about")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("address")->nullable();
            $table->string("site_logo")->nullable();
            $table->string("left_image")->nullable();
            $table->string("top_left_image")->nullable();
            $table->string("top_right_image")->nullable();
            $table->string("bottom_image")->nullable();
            $table->string("full_bg_image")->nullable();
            $table->string("stock_name")->nullable();
            $table->integer("stock_category_id")->default(0);
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
        Schema::dropIfExists('mains');
    }
}
