<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']			= 'MYSQL';
$DB['SERVER']			= 'zabbix_database';
$DB['PORT']			= '3306';
$DB['DATABASE']			= 'zabbix';
$DB['USER']			= 'zabbix';
$DB['PASSWORD']			= 'ZabbiXPassworD';
// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA']			= '';

$ZBX_SERVER			= 'zabbix_server';
$ZBX_SERVER_PORT		= '10051';
$ZBX_SERVER_NAME		= 'zabbix_server';

$IMAGE_FORMAT_DEFAULT	= IMAGE_FORMAT_PNG;
?>

