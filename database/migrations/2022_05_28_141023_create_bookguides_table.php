<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookguidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookguides', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('travellers_id')
                ->constrained("travellers")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId('guide_id')
                ->constrained("guides")
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->string('national_id');
            $table->string('phone_num1');
            $table->string('phone_num2');
            $table->string('from');
            $table->string('to');
            $table->string('num_of_days');
            $table->text('message');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookguides');
    }
}
