<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('sinopsis');
            $table->text('content');
            $table->integer('user_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->integer('director_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('movies');
    }
}
