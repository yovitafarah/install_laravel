<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biodata', function($tabel) {
			$tabel->increments('nim');
			$tabel->string('nama');
			$tabel->string('jurusan');
			$tabel->integer('usia');
			$tabel->string('jenis_kelamin');
			$tabel->string('telepon');
			$tabel->string('email');
			$tabel->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('biodata');
	}

}
