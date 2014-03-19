<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbInit extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->text('username');
			$table->text('email');
			$table->text('password');
			$table->text('firstname')->nullable();
			$table->text('lastname')->nullable();
			$table->enum('gender', array('Male', 'Female'))->nullable();
			$table->date('birthday')->nullable();
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
