<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableScholarshipWinners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_winners', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name_kh');
            $table->string('name_latin');
            $table->string('photo')->nullable();
            $table->string('degree')->nullable();
            $table->integer('duration')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_staff')->default(false);
            $table->integer('obtain_year')->nullable();

            $table->timestamps();

            $table->integer('university')->unsigned()->index();
            $table->foreign('university')
                ->references('id')
                ->on('partners')
                ->onDelete('NO ACTION');

            $table->integer('scholarship_id')->unsigned()->index();
            $table->foreign('scholarship_id')
                ->references('id')
                ->on('scholarships')
                ->onDelete('NO ACTION');


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
        Schema::drop('scholarship_winners');
    }
}
