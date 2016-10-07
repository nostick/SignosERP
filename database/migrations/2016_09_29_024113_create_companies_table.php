<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick_name');
            $table->string('name');
            $table->string('address');
            $table->string('location');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('email');
            $table->string('cuit');
            $table->string('iibb');
            $table->string('bank_data');
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
        Schema::drop('companies');
    }
}
