<?php 

$conf = array();
$conf['base_url'] = "http://localhost/mvc/public";

// database
$conf['db_driver'] = 'mysqli';

// postgres
// $conf['db_driver_postgres'] = 'postgres';
$conf['db_host_postgres'] = 'localhost';
$conf['db_username_postgres'] = 'postgres';
$conf['db_password_postgres'] = 'sembarang';
$conf['db_name_postgres'] = 'test';
$conf['db_port_postgres'] = '5432';

// mysqli
// $conf['db_driver_mysqli'] = 'mysqli';
$conf['db_host_mysqli'] = 'localhost';
$conf['db_username_mysqli'] = 'root';
$conf['db_password_mysqli'] = 'sembarang';
$conf['db_name_mysqli'] = 'wedding';
$conf['db_port_mysqli'] = '3306';


foreach ($conf as $k => $v) {
	eval('define("' . strtoupper($k) .'", "' . $v . '");');
}

?>