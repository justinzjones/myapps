<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productNumber');
            $table->string('productType');
            $table->string('productName');
            $table->string('productId');
            $table->string('quantity');
            $table->string('priceCurrency');
            $table->string('priceSymbol');
            $table->string('priceValue');
            $table->string('status');
            // $table->foreignId('order_id')->constrained();
            $table->timestamps();

            $table->unsignedBigInteger('order_id');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
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
        Schema::dropIfExists('order_products');
    }
}
