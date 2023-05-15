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
        Schema::create('tbl_service', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('service_name');
            $table->text('service_desc');
            $table->enum('device_status', ['active', 'inactive'])->default('active');
            $table->boolean('auto_increment')->default(false);
            $table->boolean('prefix')->default(false);
            $table->boolean('surfix')->default(false);
            $table->boolean('reset_daily')->default(false);            
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
        Schema::dropIfExists('tbl_service');
    }
};
