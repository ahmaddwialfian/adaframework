<?php 

/**
 * 
 */
class M_home extends Model
{
	protected static $table = 'sc_user';
	protected static $schema = 'gate';
	protected static $key = 'userid';
	protected static $order = 'userid';
	
	public function getUser()
	{
		$array = $this->getList();
		$row = $this->getData('3294');

		return array($array,$row);
	}

	public function getUserByUsername($username)
	{
		$row = $this->db->getRow("select * from " . $this->table . " where username = '" . $username . "'");

		return $row;
	}
}
 ?>