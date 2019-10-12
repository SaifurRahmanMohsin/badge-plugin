<?php namespace Mohsin\Badge\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('mohsin_badges', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject');
            $table->string('status');
            $table->string('color', 7);
            $table->bigInteger('hits')->default(0);
            $table->enum('style', ['flat', 'svg', 'flat-square', 'plastic']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_badges');
    }
}
