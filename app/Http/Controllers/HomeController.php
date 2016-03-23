<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	public function home()
	{
		return view('home.home');
	}
	
	public function servizi()
	{
		return view('home.servizi');
	}
	
	public function shiatsu()
	{
		return view('home.shiatsu');
	}
	
	public function rilassante()
	{
		return view('home.rilassante');
	}
	
	public function contatti()
	{
		return view('home.contatti');
	}
}
