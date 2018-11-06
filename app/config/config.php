<?php 

$conf = array();
$conf['base_url'] = "http://localhost/adaframework/";

// database
$conf['db_driver'] = 'postgres';

// postgres
// $conf['db_driver_postgres'] = 'postgres';
$conf['db_host_postgres'] = '192.168.1.8';
$conf['db_username_postgres'] = 'postgres';
$conf['db_password_postgres'] = 'sembarang';
$conf['db_name_postgres'] = 'delasalle_dev';
$conf['db_port_postgres'] = '5433';

// mysqli
// $conf['db_driver_mysqli'] = 'mysqli';
$conf['db_host_mysqli'] = 'localhost';
$conf['db_username_mysqli'] = 'root';
$conf['db_password_mysqli'] = 'sembarang';
$conf['db_name_mysqli'] = 'wedding';
$conf['db_port_mysqli'] = '3306';

$conf['default_route'] = '';

foreach ($conf as $k => $v) {
	eval('define("' . strtoupper($k) .'", "' . $v . '");');
}

?>