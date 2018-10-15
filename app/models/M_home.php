<?php 

/**
 * 
 */
class M_home extends Model
{
	private $table = 'friends';
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	public function getUser()
	{
		$array = $this->db->getArray('select * from ' . $this->table);
		$row = $this->db->getRow('select * from ' . $this->table);

		return array($array,$row);
	}
}
 ?>