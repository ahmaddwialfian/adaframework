<?php 
/**
 * 
 */
class Database
{
	private $driver = DB_DRIVER;
	private $host;// = DB_HOST;
	private $user;// = DB_USERNAME;
	private $pass;// = DB_PASSWORD;
	private $dbname;// = DB_NAME;
	private $port;// = DB_PORT;

	public $conn;

	function __construct()
	{
		require_once('app/includes/adodb5/adodb.inc.php');

		eval('$this->host = DB_HOST_'.strtoupper($this->driver).';');
		eval('$this->user = DB_USERNAME_'.strtoupper($this->driver).';');
		eval('$this->pass = DB_PASSWORD_'.strtoupper($this->driver).';');
		eval('$this->dbname = DB_NAME_'.strtoupper($this->driver).';');
		eval('$this->port = DB_PORT_'.strtoupper($this->driver).';');

		$connect = ADONewConnection($this->driver);
		
		if($this->driver == 'postgres'){
			$connect->Connect('host=' . $this->host . ' port=' . $this->port . ' dbname=' . $this->dbname . ' user=' . $this->user . ' password=' . $this->pass);
		}
		else if($this->driver == 'mysqli'){
			$connect->Connect($this->host,$this->user,$this->pass,$this->dbname);
		}

		$connect->SetFetchMode(ADODB_FETCH_ASSOC);

		$this->conn = $connect;
	}	

}

?>