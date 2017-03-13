<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name_kh');
            $table->string('name_latin');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('photo')->nullable();
            $table->date('dob')->nullable();
            $table->integer('start_working_date')->nullable();
            $table->integer('stop_working_date')->nullable();
            $table->string('cv')->nullable();
            $table->text('about_me')->nullable();
            $table->text('interest')->nullable();

            $table->timestamps();

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
        Schema::drop('employees');
    }
}
