<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
	}

	public function index()
	{
		$data = [
			"script" => "home",
			"title" => "Home"
		];
		return view('pages/home', $data);
	}

	public function req()
	{
		dd($this->request->getVar());
	}
}