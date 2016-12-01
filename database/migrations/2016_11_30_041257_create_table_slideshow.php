<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSlideshow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_shows', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('create_uid')->unsigned()->index();
            $table->integer('write_uid')->unsigned()->index()->nullable();
            $table->foreign('create_uid')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');

            $table->foreign('write_uid')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');



            $table->string('image',100);
            $table->string('title');
            $table->string('description');
            $table->integer('page_id');
            $table->boolean('active')->default(true);
            $table->string('reference_link')->nullable();
            $table->string('reference_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slide_shows');
    }
}
