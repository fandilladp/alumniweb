<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$dataangket = new \App\Models\DataAngketModel();
		$jumlahlumni = $dataangket->countAllResults();
		return view('home/index',[
			'jumlahalumni' => $jumlahlumni
		]);
	}

	//--------------------------------------------------------------------

}
