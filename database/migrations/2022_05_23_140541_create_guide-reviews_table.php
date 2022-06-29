<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('guide-reviews', function (Blueprint $table) {
            $table->id();
            $table->text('review');
            $table->float('rating');
            $table->timestamps();
            $table->foreignId('traveller_id')
                ->constrained("travellers")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('guide_id')
                ->constrained("guides")
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
