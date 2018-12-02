<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('intro')->nullable();
            $table->text('details')->nullable();
            $table->text('slug')->nullable();
            $table->integer('page_type_id')->unsigned()->index();
            $table->integer('lang_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('pages', function($table) {

            $table->foreign('lang_id')
                ->references('id')->on('langauges')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('page_type_id')
                ->references('id')->on('page__types')
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
        Schema::dropIfExists('pages');
    }
}
