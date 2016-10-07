<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('company');
            $table->boolean('responsible');
            $table->integer('responsible_id')->unsigned()->nullable();
            $table->foreign('responsible_id')->references('id')->on('responsibles')->onDelete('cascade');
            $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('email');
            $table->string('address');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
