<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastScannedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastScanned', function (Blueprint $table) {
            
            $table->id();

            $table->string('shipper');

            $table->string('awb');

            $table->string('site');

            $table->string('orderWeight');

            $table->timestamp('dateScanned')->useCurrent();

            $table->string('destinationAddress')->nullable();

            $table->integer('isShowing')->default(1);

            $table->integer('orderID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('past_scanneds');
    }
}
