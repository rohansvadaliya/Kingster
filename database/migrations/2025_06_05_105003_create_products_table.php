<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('index')->default(1000);
            $table->string('product_name');
            $table->decimal('offer_price', 10, 2);
            $table->decimal('original_price', 10, 2);
            $table->text('features')->nullable();
            $table->float('rating', 2, 1)->default(0);
            $table->unsignedInteger('review_count')->default(0);
            $table->unsignedInteger('sold_count')->default(0);
            $table->longText('description')->nullable();

            $table->string('default_img')->nullable();

            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('img_6')->nullable();
            $table->string('img_7')->nullable();
            $table->string('img_8')->nullable();
            $table->string('img_9')->nullable();
            $table->string('img_10')->nullable();


            $table->integer('is_variant')->default(0);
            $table->string('variant_1_name')->nullable();
            $table->decimal('variant_1_price', 10, 2)->nullable();
            $table->decimal('variant_1_oprice', 10, 2)->nullable();
            $table->float('variant_1_offer', 5, 2)->nullable();

            $table->string('variant_2_name')->nullable();
            $table->decimal('variant_2_price', 10, 2)->nullable();
            $table->decimal('variant_2_oprice', 10, 2)->nullable();
            $table->float('variant_2_offer', 5, 2)->nullable();

            $table->string('variant_3_name')->nullable();
            $table->decimal('variant_3_price', 10, 2)->nullable();
            $table->decimal('variant_3_oprice', 10, 2)->nullable();
            $table->float('variant_3_offer', 5, 2)->nullable();

            $table->integer('created_by')->default(1);
            $table->integer('modified_by')->default(1);
            $table->integer('status')->default(1);
            $table->integer('is_deleted')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
