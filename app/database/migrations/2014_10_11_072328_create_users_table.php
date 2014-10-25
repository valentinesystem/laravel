<?php

//use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
             Schema::create('users', function($table)
                {
                    $table->increments('id');
                    $table->string('username', 50);
                    $table->string('password', 50);
                    $table->string('fullname');
                    $table->string('email');
                    $table->string('status', 10);
                    $table->timestamps();
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
