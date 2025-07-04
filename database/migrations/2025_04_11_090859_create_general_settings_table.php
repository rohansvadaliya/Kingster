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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('brand_logo')->nullable();
            $table->string('brand_white_logo')->nullable();
            $table->string('brand_fevicon')->nullable();
            $table->string('header_banner_1')->nullable();
            $table->string('header_banner_2')->nullable();
            $table->string('header_banner_3')->nullable();
            $table->string('header_banner_4')->nullable();
            $table->string('customer_support_mobile')->nullable();
            $table->string('customer_support_email')->nullable();
            $table->string('office_time')->nullable();
            $table->text('footer_about_us_1')->nullable();
            $table->text('footer_about_us_2')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('wp_link')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->bigInteger('active_clients')->default(0);
            $table->bigInteger('expert_mechanics')->default(0);
            $table->bigInteger('reputation_years')->default(0);
            $table->string('first_reviewer_name')->nullable();
            $table->text('first_reviewer_msg')->nullable();
            $table->string('second_reviewer_name')->nullable();
            $table->text('second_reviewer_msg')->nullable();
            $table->string('third_reviewer_name')->nullable();
            $table->text('third_reviewer_msg')->nullable();

            $table->integer('created_by')->default(1);
            $table->integer('modified_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
