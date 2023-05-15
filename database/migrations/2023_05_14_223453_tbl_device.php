<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_device', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('device_id');
            $table->string('device_name');
            $table->enum('device_type', ['Kiosk', 'display']) ->default('Kiosk');
            $table->string('ip_address');
            $table->enum('device_status', ['active', 'inactive'])->default('active');
            $table->enum('device_connect', ['connected', 'disconnected'])->default('connected');
            $table->string('service');
            $table->string('password');
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
        Schema::dropIfExists('tbl_device');
    }
};
