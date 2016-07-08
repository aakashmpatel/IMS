<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship__statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('internship_status');
            $table->unsignedInteger('students_id');
            $table->foreign('students_id')->references('id')->on('Students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('internship__statuses');
    }
}
