<?php 

/**
 * 
 */
class Controller extends Api
{
	protected $model = '';
	protected $method = '';
	protected $params = [];

	public function __construct()
	{

	}

	public function view($location, $data = [])
	{
		if(!empty($data)){
			foreach ($data as $k => $v) {
				eval('$'.$k.' = '.$v.';');
			}
		}

		require_once '../app/views/' . $location . '.php';
	}

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		return new $model;
	}

	public function api_content($url, $request)
	{
		return $this->getContent($url, $request);
	}

}
 ?>