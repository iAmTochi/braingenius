<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_params', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique()->index();
            $table->string('session_uuid');
            $table->tinyInteger('ca1')->nullable();
            $table->tinyInteger('ca2')->nullable();
            $table->tinyInteger('ca3')->nullable();
            $table->tinyInteger('ca4')->nullable();
            $table->tinyInteger('exam')->nullable();
            $table->tinyInteger('weight')->default(0);
            $table->string('class_uuid');
            $table->timestamps();
            $table->string('created_by');
            $table->string('updated_by');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_params');
    }
}
