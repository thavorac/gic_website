<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('url')->nullable();
            $table->boolean('mou')->default(false);
            $table->string('description')->nullable();

            $table->timestamps();

            $table->integer('partner_type_id')->unsigned()->index();
            $table->foreign('partner_type_id')
                ->references('id')
                ->on('partner_types')
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
        Schema::drop('partners');
    }
}
