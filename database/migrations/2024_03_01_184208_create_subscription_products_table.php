<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->text('product_description')->nullable();
            $table->decimal('product_price', 10, 2);
            $table->decimal('product_price_fix_discount', 10, 2)->nullable();
            $table->decimal('product_price_percentage_discount', 5, 2)->nullable();
            $table->string('product_tag')->nullable();
            $table->string('product_thumb_image')->nullable();
            $table->json('product_gallery')->nullable();
            $table->integer('product_quantity')->nullable();
            $table->json('product_color')->nullable();
            $table->string('product_sku')->nullable();
            $table->string('product_category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_products');
    }
}
