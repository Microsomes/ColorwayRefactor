<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombineArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combineArtwork', function (Blueprint $table) {
            
            $table->id();

            $table->string('path');

            $table->timestamp('created')->useCurrent();

            $table->string('site');

            $table->string('sku');

            $table->string('size');

            $table->integer('isClaimed')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combine_artworks');
    }
}
