<?php 

/**
 * 
 */
class About extends Controller
{
	
	function __construct()
	{
		
	}

	function index(){
		$data = array();
		$data['username'] = '00011001';

		$request = json_encode($data);

		$url = 'http://127.0.0.1/adaframework/public/about/request';
		$response = $this->api_content($url, $request);

		print_r($response);
	}

	function request(){
		$start = microtime(true);
		$datajson = file_get_contents('php://input');

		if(!empty($datajson)){

			$request = json_decode($datajson,true);

			$response = $this->model('M_home')->getUserByUsername($request['username']);

			$end = microtime(true);
			$time = $end - $start;
			$response['time'] = round($time, 4);

			ob_clean();

			header("Access-Control-Allow-Orgin: *");
			header("Access-Control-Allow-Methods: *");
			header("Content-Type: application/json");

			echo json_encode($response);
		}
		else{
			$response['error'] = "empty request";
			$response['time'] = round($time, 4);

			echo json_encode($response);
		}
	}
}
 ?>