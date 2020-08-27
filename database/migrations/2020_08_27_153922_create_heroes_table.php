<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->text('skill1');
            $table->text('skill2');
            $table->text('skill3');
            $table->text('skill4');
            $table->string('hp');
            $table->string('atk');
            $table->string('armor');
            $table->string('speed');
            $table->string('aoe');
            $table->string('cc');
            $table->string('heal');
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
        Schema::dropIfExists('heroes');
    }
}
