<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id('trip_id');
            $table->string('tripname');
            $table->text('description');
            $table->string('nofpeople');
            $table->time('duration');
            $table->decimal('price');
            $table->date('from');
            $table->date('to');
            $table->string('guideLines');
            $table->string('photos');
            $table->time('departureTime');
            $table->string('departurePlace');
            $table->foreignId('company_id')
                ->constrained("companies")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId('city_id')
                ->constrained("cities")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();

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
        Schema::dropIfExists('trips');
    }
}
