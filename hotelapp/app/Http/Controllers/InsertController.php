<?php
namespace App\Http\Controllers;

use App, View, Validator, Input, Redirect;
use App\City;
use App\Hotel;
use Request;
use Illuminate\Support\Facades\Session;
use Response;

class InsertController extends Controller {

	public function getInsert() {
		
		//Use to insert data to the cities table for time being
		
		/*$city = new City;

		 $city->name = 'Colombo';

		 $city->save();*/

		 // get all the cities from cities table in alphabetical order
		$city = City::orderBy('name') -> get();
		
		//make the insert view with cities
		return View::make('insert') -> with('cities', $city);

	}

	public function postInsert() {
			
		//load data from ajax request and save to the database
		if (Request::ajax()) {
			$name = Input::get('name');
			$address_line1 = Input::get('address_line1');
			$address_line2 = Input::get('address_line2');
			$city_id = Input::get('city');

			$hotel = new Hotel;
			$hotel -> name = $name;
			$hotel -> address_line1 = $address_line1;
			$hotel -> address_line2 = $address_line2;
			$hotel -> city_id = $city_id;
			$hotel -> save();

			$response = array('status' => 'success', 'msg' => 'Setting created successfully', );
			return 'Hotel is added successfully';

		} else {
			return 'no';
		}

	}

}
