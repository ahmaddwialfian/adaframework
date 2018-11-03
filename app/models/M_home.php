<?php 

/**
 * 
 */
class M_home extends Model
{
	private $table = 'gate.sc_user';
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	public function getUser()
	{
		$array = $this->db->getArray('select * from ' . $this->table . ' limit 50');
		$row = $this->db->getRow('select * from ' . $this->table . ' limit 50');

		return array($array,$row);
	}

	public function getUserByUsername($username)
	{
		$row = $this->db->getRow("select * from " . $this->table . " where username = '" . $username . "'");

		return $row;
	}
}
 ?>