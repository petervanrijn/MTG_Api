<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id('cardNumber');
            $table->String('setIdcode');
            $table->foreign('setIdcode')->references('idCode')->on('sets');
            $table->string('name');
            $table->string('color');
            $table->string('text');
            $table->string('subText')->nullable();
            $table->integer('cost');
            $table->string('type');
            $table->integer('power')->nullable()->default(null);
            $table->integer('toughness')->nullable()->default(null);
            //het is een string omdat je alleen de locatie nodig hebt en niks upload
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropForeign('cards_setIdcode_foreign');
        });
        Schema::dropIfExists('cards');
    }
}
