<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('codeno')->unique();
            $table->date('date');
            $table->text('duration');
            $table->text('amount');
            $table->foreignID('paymenttype_id')->references('id')->on('paymenttypes')->onDelete('cascade');
            $table->foreignID('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreignID('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('rents');
    }
}
