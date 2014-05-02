<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

	public function getIndex()
	{
		return View::make('frontend.index');
	}

}
