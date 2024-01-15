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
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug');
            $table->text('code')->nullable();
            $table->text('description')->nullable();
            $table->text('discount')->nullable();
            $table->text('color')->nullable();
            $table->text('img')->nullable();
            $table->text('Price');
            $table->text('Brand')->default('TEJAS');
            $table->timestamps();
        });
        
        Schema::create('tbl_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_id");
            $table->foreign('product_id')->references('id')->on('tbl_product')->cascadeOnUpdate();
            $table->text("battery")->nullable();
            $table->text("motor")->nullable();
            $table->text("speed")->nullable();
            $table->text("capacity")->nullable();
            $table->text("range")->nullable();
            $table->text("charging_time")->nullable();
            $table->text("fast_charging_time")->nullable();
            $table->text("battery_swapping")->nullable();
            $table->text("front_suspension")->nullable();
            $table->text("rear_suspension")->nullable();
            $table->text("brakes_type")->nullable();
            $table->text("loading_capacity")->nullable();
            $table->text("tyre")->nullable();
            $table->text("alloy_type")->nullable();
            $table->text("tyre_size")->nullable();
            $table->text("head_lights")->nullable();
            $table->text("back_light")->nullable();
            $table->text("mobile_charging")->nullable();
            $table->text("anti_theft_alarm")->nullable();
            $table->text("keyless_entry")->nullable();
            $table->text("ground_clearance")->nullable();
            $table->text("digital_speedometre")->nullable();
            $table->text("central_locking")->nullable();
            $table->text("find_my_scooty")->nullable();
            $table->text("secure_parking")->nullable();
            $table->text("reverse_gear")->nullable();
            $table->text("floor_mat")->nullable();
            $table->text("tool_kit")->nullable();
            $table->text("dimension")->nullable();
            $table->text("water_and_dust_resistance")->nullable();
            $table->text("body_type")->nullable();
            $table->text("light")->nullable();
            $table->text("speed_mode")->nullable();
            $table->text("gradient")->nullable();
            $table->text("warrenty")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
        Schema::dropIfExists('tbl_features');
    }
};
