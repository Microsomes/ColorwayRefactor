<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemids', function (Blueprint $table) {
            
            $table->id();

            $table->integer('rbOrderID');

            $table->timestamp('receivedItem')->useCurrent();

            $table->string('sku');

            $table->string('site_alloc')->nullable();

            $table->string('properties');

            $table->string('assetURL');

            $table->string('raw');

            $table->integer('isArtworkProcessed')->default(0);

            $table->string('size');

            $table->integer('isArtworkDownloaded')->default(0);

            $table->string('temp_artwork_path')->nullable();

            $table->string('generatedArtworkPath')->nullable();

            $table->string('value')->nullable();

            $table->integer('isCombinePrint')->default(0);

            $table->string('note')->nullable();

            $table->string('internal_status')->default('RECEIVED');

            $table->string('external_status')->default('Order Accepted (201)');

            $table->dateTime('lastUpdated')->nullable();

            $table->string('internal_process')->default('IMPENDING_DOWNLOAD');

            $table->integer('quantity')->default(1);

            $table->string('col')->nullable();

            $table->integer('isChild')->default(0);

            $table->string('jobsheetPath')->nullable();

            $table->string('itemID');

            $table->integer('combineprintID')->nullable();

            $table->integer('isDamaged')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemids');
    }
}
