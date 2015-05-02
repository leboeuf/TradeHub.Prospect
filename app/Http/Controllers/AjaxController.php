<?php namespace App\Http\Controllers;

class AjaxController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function show($query)
	{
		return view('resultpage');
	}

}
