<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->id();
            
            $table->timestamp('received')->nullable();

            $table->json('payload')->nullable();

            $table->integer('isPulled')->default(0);

            $table->string('orderID');

            $table->string('site_alloc');

            $table->string('callback_url');

            $table->string('addressInfo');

            $table->string('shippingMethod')->nullable();

            $table->string('internalStatus')->default('RECEIVED');

            $table->string('externalStatus')->default('Acknowledged (201)');

            $table->timestamp('lastChange')->default(now());

            $table->string('customerFirstName')->nullable();

            $table->string('customerLastName')->nullable();

            $table->string('FullName')->nullable();

            $table->integer('isPDFGenerated')->default(0);

            $table->integer('isArtworkProcessed')->default(0);

            $table->string('pdfPath')->nullable();

            $table->integer('isGrabbedForDownlaod')->default(0);

            $table->string('allpdfPaths')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
