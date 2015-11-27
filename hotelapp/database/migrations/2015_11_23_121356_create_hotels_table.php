<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('hotels', function(Blueprint $newtable) {
			$newtable -> increments('hotel_id');
			$newtable -> String('name');
			$newtable -> String('address_line1');
			$newtable -> String('address_line2');
			$newtable -> integer('city_id') -> unsigned();
			$newtable -> foreign('city_id') -> references('id') -> on('cities');
			$newtable -> timestamps();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('hotels');

	}

}
