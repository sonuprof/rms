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
        Schema::create('rms', function (Blueprint $table) {
            $table->id();
            $table->string('district')->nullable();
            $table->string('site_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('created_date')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('admin_area')->nullable();
            $table->string('address')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('plant_type')->nullable();
            $table->string('system_type')->nullable();
            $table->string('operating_date')->nullable();
            $table->string('installed_capacity')->nullable();
            $table->string('azimuth')->nullable();
            $table->string('angle_of_tilt')->nullable();
            $table->string('currency')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('device_name')->nullable();
            $table->string('inverter_device_status')->nullable();
            $table->string('inverter_production_power')->nullable();
            $table->string('inverter_production_today')->nullable();
            $table->string('update_time')->nullable();
            $table->string('logger_device_status')->nullable();
            $table->string('total_production')->nullable();
            $table->string('running_days')->nullable();
            $table->string('co2_prevention')->nullable();
            $table->string('anticipated_yield')->nullable();
            $table->string('phase')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rms');
    }
};
