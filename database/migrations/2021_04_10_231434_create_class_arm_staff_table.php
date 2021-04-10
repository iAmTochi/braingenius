<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassArmStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_arm_staff', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('user_uuid');
            $table->string('class_arm_uuid');
            $table->timestamps();
            $table->string('created_by');
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('class_arm_staff');
    }
}
