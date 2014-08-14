<?php
class FormController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

    public function getInfos()
	{
		return View::make('addInfos');
	}

	public function postInfos()
	{
		$regles = array(
			'x' => 'numeric',
			'y' => 'numeric',
			'house_number' => 'integer',
			'street' => 'alpha|max:250',
			'main_street' => 'alpha|max:250',
			'code' => 'integer',
			'city' => 'alpha|max:250',
			'country' => 'alpha|max:250',
			'building_type' => 'required|integer',
			'damages'=> 'required|integer',
			'total_population'=> 'required|integer',
			'injured'=> 'required|integer',
			'severly_injured'=> 'required|integer',
			'deceased'=> 'required|integer',
			'entrapped'=> 'required|integer',
			'noninjured'=> 'required|integer',
			'checkboxes'=> 'required|integer',
		);

		$validation = Validator::make(Input::all(), $regles);

		if ($validation->fails()) {
		  return Redirect::to('infos/infos')->withErrors($validation)->withInput();
		} else {
			$location = new Location();
			$location->x = Input::get('x');
			$location->y = Input::get('y');
			$location->ad_number = Input::get('house_number');
			$location->ad_street = Input::get('street');
			$location->ad_mainstreet = Input::get('main_street');
			$location->ad_code = Input::get('code');
			$location->ad_city = Input::get('city');
			$location->ad_country = Input::get('country');
			$location->save();

			$population =  new Population();
			$population->id_location = $location->id;
			$population->deceased = Input::get('deceased');
			$population->injured = Input::get('injured');
			$population->number_of_people = Input::get('total_population');
			$population->non_injured_people = Input::get('noninjured');
			$population->severly_injured = Input::get('severly_injured');
			$population->road_blocage = Input::get('checkboxes');
			$population->entrapped_people = Input::get('entrapped');
			$population->save();

			$building =  new Building();
			$building->id_location = $location->id;
			$building->type = Input::get('building_type');
			$building->damages = Input::get('damages');
			$building->save();
			return View::make('hello');
		}
		
	}

}