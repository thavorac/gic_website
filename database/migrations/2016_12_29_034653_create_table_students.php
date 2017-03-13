<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name_kh');
            $table->string('name_latin');
            $table->string('photo')->nullable();
            $table->date('dob');
            $table->string('personal_phone')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('id_card');
            $table->string('address');
            $table->string('description')->nullable();
            $table->text('about')->nullable();
            $table->integer('promotion')->nullable();
            $table->timestamps();

            $table->integer('department_id')->unsigned()->index();
            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('cascade');

            $table->integer('create_uid')->unsigned()->index();
            $table->foreign('create_uid')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION');

            $table->integer('write_uid')->unsigned()->index()->nullable();
            $table->foreign('write_uid')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
