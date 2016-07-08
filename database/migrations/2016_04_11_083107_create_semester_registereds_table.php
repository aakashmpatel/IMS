<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterRegisteredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_registereds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('semester');
            $table->string('year');
            $table->integer('students_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semester_registereds');
    }
}
