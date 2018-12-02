<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('tour_id')->unsigned()->index();
            $table->integer('facility')->nullable();
            $table->integer('meals')->nullable();
            $table->integer('location')->nullable();
            $table->integer('service')->nullable();
            $table->integer('stuff')->nullable();
            $table->integer('value_for_money')->nullable();
            $table->timestamps();
        });
        Schema::table('reviews', function($table) {
            $table->foreign('tour_id')
                ->references('id')->on('tours')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
