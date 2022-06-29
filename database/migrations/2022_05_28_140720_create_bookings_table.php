<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->foreignId('traveller_id')
                ->constrained("travellers")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId('trip_id')
                ->constrained("trips")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->string('national_id');
            $table->string('phone_num1');
            $table->string('phone_num2');
            $table->string('num_of_seats');

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
