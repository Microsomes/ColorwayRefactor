<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_track', function (Blueprint $table) {
            
            $table->id();
            
            $table->string('author');

            $table->string('status');

            $table->string('item_id');

            $table->string('order_id');

            $table->timestamp('timestramp')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_track');
    }
}
