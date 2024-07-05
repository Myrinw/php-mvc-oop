<?php
class Pages extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		$this->view('pages/index', ['title' => 'Welcome']);
	}

	public function about()
	{
		$this->view('pages/about');
	}
}
