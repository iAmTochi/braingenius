<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('uuid')->unique()->index();
            $table->string('user_uuid')->unique();
            $table->string('title','15');
            $table->string('last_name','50');
            $table->string('first_name','50');
            $table->string('other_name', '50')->nullable();
            $table->string('email')->unique();
            $table->string('phone','15')->unique();
            $table->text('address');
            $table->date('dob');
            $table->enum('gender',['M','F']);
            $table->enum('role',[1,2,3])->comment('1-Regular Staff; 3-Bursar; 3-Principal;');
            $table->string('house_uuid')->nullable();
            $table->string('grade_level')->nullable();
            $table->string('rank','80')->nullable();
            $table->string('academic_qualification','50');
            $table->string('department_uuid','50')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
