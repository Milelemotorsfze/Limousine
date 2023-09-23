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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('drive_system')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('year')->nullable();
            $table->string('displacement_cc')->nullable();
            $table->string('torque_kgm')->nullable();
            $table->string('torque_rpm')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('wheels_in_inch')->nullable();
            $table->string('fuel_tank_in_liter')->nullable();
            $table->string('seats')->nullable();
            $table->string('length')->nullable();
            $table->string('breadth')->nullable();
            $table->string('height')->nullable();
            $table->string('lease_to_own_months')->nullable();
            $table->string('lease_monthly')->nullable();
            $table->string('lease_downpayment')->nullable();
            $table->string('rent_daily_aed')->nullable();
            $table->string('rent_weekly_aed')->nullable();
            $table->string('rent_monthly_aed')->nullable();
            $table->string('rent_yearly_aed')->nullable();
            $table->string('slider_image')->nullable();
            $table->string('feature_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
