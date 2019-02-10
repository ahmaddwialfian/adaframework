<?php 

/**
 * 
 */
class Model
{
	public $database;
	public $db;
	protected static $instance = NULL;
	protected static $table = '';
	protected static $schema = '';
	protected static $key = '';
	protected static $order = '';

	function __construct()
	{
		if($this->db == null)
			$this->database = new Database;

		$this->db = $this->database->conn;
	}

	public function getArray($query)
	{
		$data = $this->db->getArray($query);

		return $data;
	}

	public function getRow($query){
        $data = $this->db->getRow($query);

		return $data;
	}

	public function getTable($table = null){
		if(empty($table))
			$table = static::$table;

		if(!empty(static::$schema))
			$table = static::$schema.'.'.$table;

		return $table;
	}

	public function getKey($keys = null){
		if(!is_array($keys))
			$keys = array($keys);
		$keycol = explode('/', static::$key);
		for($i = 0; $i < count($keycol); $i++){
			$arrKey[] = $keycol[$i].' = '.$keys[$i];
		}

		return $arrKey;
	}

	public function debug($debug = false){
        $this->db->debug = $debug;
	}

	public function getList(){
		$sql = $this->getListSql();
		$sql .= $this->limit();

		return $this->getArray($sql);
	}

	public function getData($key){
		$sql = $this->getDataSql();
		$sql .= $this->where(null,$key);

		return $this->getRow($sql);
	}

	public function getListSql($sql = null) {
		if(empty($sql))
			$sql = $this->select().$this->from();

		return $sql;
	}

	public function getDataSql($sql = null) {
		if(empty($sql))
			$sql = $this->select().$this->from();

		return $sql;
	}

	public function select($select = "*"){
		$sqlSelect = "select " . $select;

		return $sqlSelect;
	}

	public function from($from = null){
		if(empty($from))
			$from = $this->getTable();
		$sqlFrom = " from " . $from;

		return $sqlFrom;
	}

	public function where($where = array(), $key = null){
		if(empty($where))
			$where[]  = "1=1";
		$sqlWhere = " where " . implode(' and ', $where);

		if(!empty($key)){
			$sqlWhere .= ' and '.implode(' and ', $this->getKey($key));
		}

		return $sqlWhere;
	}

	public function order($order = null){
		if(empty($order))
			$order = static::$order;
		if(empty($order))
			$order = static::$key;
		$sqlOrder = " order by " . $order;
		return $sqlOrder;
	}

	public function limit($limit = 10){
		$limitSql = " limit ".$limit;
		return $limitSql;
	}
}
 ?>