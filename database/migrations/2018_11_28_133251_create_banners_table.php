<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('image');
            $table->string('intro')->nullable();
            $table->string('link')->nullable();
            $table->string('slug')->nullable();
            $table->integer('lang_id')->unsigned()->index();
            $table->timestamps();
        });


        Schema::table('banners', function($table) {

            $table->foreign('lang_id')
                ->references('id')->on('langauges')
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
        Schema::dropIfExists('banners');
    }
}
