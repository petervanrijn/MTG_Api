<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('generic_mana');
            $table->string('type');
            $table->string('type_name');
            $table->integer('power')->nullable()->default(null);
            $table->integer('toughness')->nullable()->default(null);
            $table->string('image')->default('/image/card_default.jpg');
            $table->string('set');
            $table->foreign('set')->references('set')->on('card_set');
            $table->boolean('inPossession')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card', function (Blueprint $table) {
            $table->dropForeign('card_set_foreign');
        });

        Schema::dropIfExists('card');
    }
}
