<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Game extends Migration
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
            $table->string('name')->comment('Наименование');
            $table->string('description')->comment('Описание');
            $table->string('image')->nullable()->comment('Изображение');
            $table->decimal('price', 12, 2)->comment('Цена');
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
        //
    }
}
