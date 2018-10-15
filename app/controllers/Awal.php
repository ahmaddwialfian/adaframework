<?php 

/**
 * 
 */
class Awal extends Controller
{
	
	public function __construct()
	{
		// echo 'Controller Awal';
	}

	public function index()
	{
		$data = array();
		$data['id'] = 'tes';
		$this->view('index',$data);
	}
}
 ?>