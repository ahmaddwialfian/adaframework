<?php 

$conf = array();
$conf['site_id'] = "ADA Framework";
$conf['base_url'] = "http://localhost/adaframework/";

// database
$conf['db_driver'] = 'postgres';

$conf['db_host_' . $conf['db_driver']] = 'localhost';
$conf['db_username_' . $conf['db_driver']] = 'postgres';
$conf['db_password_' . $conf['db_driver']] = 'sembarang';
$conf['db_name_' . $conf['db_driver']] = 'delasalle_dev';
$conf['db_port_' . $conf['db_driver']] = '5432';


$conf['default_route'] = '';

foreach ($conf as $k => $v) {
	eval('define("' . strtoupper($k) .'", "' . $v . '");');
}

?>