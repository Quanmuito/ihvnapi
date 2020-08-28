<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenstarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenstars', function (Blueprint $table) {
            $table->id();
            $table->string('faction');
            $table->string('name');
            $table->string('class');
            $table->text('skill1');
            $table->text('skill2');
            $table->text('skill3');
            $table->text('skill4');
            $table->integer('hp');
            $table->integer('atk');
            $table->integer('armor');
            $table->integer('speed');
            $table->string('aoe');
            $table->string('cc');
            $table->string('heal');
            $table->string('img');
            $table->string('avatar');
            $table->string('user_id');
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
        Schema::dropIfExists('tenstars');
    }
}
