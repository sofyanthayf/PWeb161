<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** HALAMAN PUBLIK **/
$route['default_controller'] = 'home';
$route['about'] = 'about';

/** HALAMAN USER **/
$route['user'] = 'user';
$route['user/reg'] = 'user/formRegister';
$route['user/register'] = 'user/register';
$route['user/(:any)'] = 'user/data/$1';  /* $1 = id user; */



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
