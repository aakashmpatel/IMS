<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('company_name');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('contact_first_name');
            $table->string('contact_last_name');
            $table->string('contact_position');
            $table->integer('telephone');
            $table->string('email');
            $table->string('company_website');
            $table->text('notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('internships');
    }
}
