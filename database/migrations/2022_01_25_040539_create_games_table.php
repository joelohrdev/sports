<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('field')->nullable();
            $table->string('opponent')->nullable();
            $table->string('location')->nullable();
            $table->text('notes')->nullable();
            $table->string('outcome')-> nullable();
            $table->integer('team_score')->nullable();
            $table->integer('opponent_score')->nullable();
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
        Schema::dropIfExists('games');
    }
}
