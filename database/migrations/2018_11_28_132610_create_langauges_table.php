<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangaugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langauges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alies');
            $table->enum('default', ['0', '1'])->default(0);
            $table->enum('status', ['0', '1'])->default(1);
            $table->enum('direction', ['ltr', 'rtl']);
            $table->string('img')->nullable();
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
        Schema::dropIfExists('langauges');
    }
}
