<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_categories', function (Blueprint $table) {
          $table->bigInteger("post")->unsigned();
          $table->bigInteger("category")->unsigned();
          $table->foreign("post")->references("id")->on("posts")->cascadeOnDelete();
          $table->foreign("category")->references("id")->on("categories")->cascadeOnDelete();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_categories');
    }
}
