<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_uuid')->index()->unique();
            $table->string('title','50');
            $table->string('last_name','50');
            $table->string('first_name','50');
            $table->string('other_name', '50')->nullable();
            $table->string('email')->unique();
            $table->string('phone','15')->unique();
            $table->text('house_address');
            $table->text('office_address')->nullable();
            $table->string('occupation');
            $table->string('next_kin')->nullable();
            $table->string('next_kin_phone')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('guardians');
    }
}
