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
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->smallInteger('amount');
            $table->string('custom_print_photo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('adress');
            $table->timestamps();
            $table->timestamp('preparation_date')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->foreign('product_id')->references('id')->on('skateboards')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('set null');
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
