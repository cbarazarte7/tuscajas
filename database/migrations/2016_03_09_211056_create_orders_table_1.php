<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('code', 20);
            $table->string('email', 150);
            $table->string('tel', 150);
            $table->text('address');
            $table->text('comments');
            $table->text('extra');
            $table->string('state',3);
            $table->integer('kit_id')->unsigned()->index();
            $table->foreign('kit_id')->references('id')->on('kits')->onDelete('cascade');
            $table->string('payment',3);
            $table->text('response');
            $table->string('response_code',3);
            $table->datetime('response_date');
            $table->datetime('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('orders');
    }

}
