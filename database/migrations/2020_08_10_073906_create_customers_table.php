<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('customer_name');
            $table->string('mobile_number');
            $table->string('customer_address');
            $table->string('customer_type');
            $table->string('purchase_items');
            $table->string('product_category');
            $table->string('purchase_amounts');
            
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
