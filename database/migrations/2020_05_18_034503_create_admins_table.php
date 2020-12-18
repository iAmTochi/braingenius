<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('uuid')->unique()->index();
            $table->string('user_uuid')->unique()->index();
            $table->string('last_name','50');
            $table->string('first_name','50');
            $table->string('other_name', '50')->nullable();
            $table->string('phone','15')->unique();
            $table->text('address');
            $table->date('dob');
            $table->enum('gender',['M','F']);
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
        Schema::dropIfExists('admins');
    }
}
