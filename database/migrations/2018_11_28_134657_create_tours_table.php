<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('intro')->nullable();
            $table->integer('rate')->nullable();
            $table->text('details')->nullable();
            $table->integer('lang_id')->unsigned()->index();
            $table->timestamp('duration')->nullable();
            $table->double('price');
            $table->timestamp('check_in')->nullable();
            $table->timestamp('check_out')->nullable();
            $table->string('start_point')->nullable();
            $table->string('end_point')->nullable();
            $table->string('lat')->nullable();
            $table->string('lan')->nullable();
            $table->text('include')->nullable();
            $table->timestamps();
        });
        Schema::table('tours', function($table) {
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
        Schema::dropIfExists('tours');
    }
}
