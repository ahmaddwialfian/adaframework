<?php 

/**
 * 
 */
class Home extends Controller
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		echo '<h1>Its Work!</h1>';
		echo '<pre>';
		list($array,$row) = $this->model('M_home')->getUser();
		print_r($array);
		print_r($row);
	}
}
 ?>