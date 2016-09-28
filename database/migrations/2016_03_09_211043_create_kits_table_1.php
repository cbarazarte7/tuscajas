<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('tags', 150);
            $table->string('picture', 250);
            $table->text('description');
            $table->text('contents');
            $table->decimal('price');
            $table->string('state',3);
            $table->string('type',3);
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
        Schema::drop('kits');
    }
}
