<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique()->index();
            $table->string('username')->unique();
            //$table->string('email')->unique();
            $table->enum('type',['lvl01','lvl02','lvl03','lvl04','lvl05']);
            $table->boolean('status')->default(false)->comment('1 - active; 0 - banned');
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('login_count')->default(0);
            $table->timestamp('last_login',0)->nullable();
            $table->rememberToken();
            $table->timestamps();

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
        Schema::dropIfExists('users');
    }
}
