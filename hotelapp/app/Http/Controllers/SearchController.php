<?php
namespace App\Http\Controllers;

use View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Input;
use App\Hotel;
use App\City;
use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;
use DB;
use App\Quotation;

class SearchController extends Controller {

	public function getSearch() {
			
		// get all the cities from cities table in alphabetical order
		$city = City::orderBy('name') -> get();
		 
		//make the insert view with cities
		return View::make('search') -> with('cities', $city);
	}

	public function executeSearch() {
		$keywords = Input::get('keywords');

		$id = Input::get('city');

		$hotels = Hotel::all();

		$searchhotel = new Collection();

		foreach ($hotels as $hotel) {
			$cityId = $hotel -> city_id;

			if (!empty($id)) {
				if ((Str::contains(Str::lower($hotel -> name), Str::lower($keywords))) && ($id == $cityId))

					$searchhotel -> add($hotel);

			} else {
				if (Str::contains(Str::lower($hotel -> name), Str::lower($keywords)))

					$searchhotel -> add($hotel);

			}
		}

		return View::make('searchedHotels') -> with('searchhotel', $searchhotel);
		
	}

}
