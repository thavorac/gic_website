<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('about');
            $table->string('syllabus')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
            $table->integer('program_type_id')->unsigned()->index();
            $table->foreign('program_type_id')
                ->references('id')
                ->on('program_types')
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
        Schema::drop('programs');
    }
}
