<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->index();
            $table->string('user_uuid');
            $table->mediumText('activity');
            $table->string('ip_address');
            $table->string('platform');
            $table->string('browser');
            $table->string('device_model');
            $table->string('device_family');
            $table->boolean('is_mobile');
            $table->boolean('is_tablet');
            $table->boolean('is_desktop');
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
        Schema::dropIfExists('activity_logs');
    }
}
