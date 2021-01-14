<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('bc_img1');
            $table->string('bc_img2');
            $table->string('bc_img3');
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
        Schema::dropIfExists('home_posts');
    }
}
