<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('admin_num',50)->unique();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('other_name',  50)->nullable();
            $table->string('phone','15')->unique();
            $table->mediumText('address');
            $table->date('dob');
            $table->enum('gender',['M','F']);
            $table->string('image')->nullable();
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('lga_id');
            $table->string('house_uuid');
            $table->string('class_arm_uuid');
            $table->integer('resident_type');
            $table->string('parent_uuid');
            $table->integer('genotype_id');
            $table->integer('religion_id');



            $table->string('class_arm_reg_uuid');
            $table->string('session_reg_uuid');

            $table->boolean('graduated')->default(0)->comment('1 = yes; 0 = no');
            $table->date('graduated_date');
            $table->string('graduate_class_arm_uuid');
            $table->string('graduate_session_uuid');
            $table->boolean('dropout')->default(0)->comment('1 = yes; 0 = no');;
            $table->date('dropout_date');
            $table->string('dropout_class_arm_uuid');
            $table->string('dropout_session_uuid');
            $table->longText('dropout_reason');
            $table->text('prev_sch_attended');
            $table->date('prev_sch_attended_date');



            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
