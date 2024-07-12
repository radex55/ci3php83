<?php defined('BASEPATH') OR exit('No direct script access allowed');
// default
$route['default_controller']='home';
// error
$route['404_override']='home/nothing';
$route['translate_uri_dashes']=FALSE;
