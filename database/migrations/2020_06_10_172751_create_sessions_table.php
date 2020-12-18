<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->index()->unique();
            $table->year('start_year')->comment('e.g. 2020');
            $table->year('end_year')->comment('e.g. 2021');
            $table->string('session','12')->comment('e.g. 2020/2021');
            $table->string('term','9')->comment('e.g. first, second, third');
            $table->unsignedInteger('term_no')->comment('e.g. 1, 2, 3');
            $table->date('session_start')->comment('date when the session started');
            $table->date('session_end')->comment('date when the session ended');
            $table->boolean('status');
            $table->boolean('access_result')->comment('If student can have access to their result for the term');
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
        Schema::dropIfExists('sessions');
    }
}
