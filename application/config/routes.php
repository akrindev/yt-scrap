<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['unduh/(:any)/(:any)'] = 'home/single/$1/$2';
$route['search'] = 'home/search';
$route['404_override'] = 'home';
$route['translate_uri_dashes'] = FALSE;
