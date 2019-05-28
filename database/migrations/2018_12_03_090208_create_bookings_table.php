<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('photo')->nullable();
            $table->integer('type_id')->unsigned();
            $table->longText('note')->nullable();
            $table->integer('client_id')->unsigned();
            $table->integer('photographer_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->text('status')->nullable();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('photographer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
