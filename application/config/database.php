<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder  = TRUE;
define('ASK2_CHARSET', 'UTF-8');
define('ASK2_VERSION', '4.0');
define('ASK2_RELEASE', '20190219');
$db['default'] =array (
  'dsn' => '',
  'hostname' => 'localhost',
  'username' => 'root',
  'password' => 'root',
  'database' => 'aaad',
  'dbdriver' => 'mysqli',
  'dbprefix' => 'whatsns_',
  'pconnect' => false,
  'db_debug' => false,
  'cache_on' => true,
  'cachedir' => '',
  'char_set' => 'utf8',
  'dbcollat' => 'utf8_general_ci',
  'swap_pre' => '',
  'encrypt' => false,
  'compress' => false,
  'stricton' => false,
  'failover' => 
  array (
  ),
  'save_queries' => true,
);
?>