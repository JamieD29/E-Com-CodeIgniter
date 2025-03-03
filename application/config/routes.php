<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login 
$route['login']['GET'] = 'LoginController/index'; // controller/name_func used to call function with the same name in Controller.
$route['login-user']['POST'] = 'LoginController/login';
//Dashboard
$route['dashboard']['GET'] = 'DashboardController/index';
$route['logout']['GET'] = 'DashboardController/logout';
//Brand
$route['brand/all']['GET'] = 'BrandController/index';
//Brand create
$route['brand/create']['GET'] = 'BrandController/create';
$route['brand/store']['POST'] = 'BrandController/store';
//Brand update
$route['brand/edit/(:any)']['GET'] = 'BrandController/edit/$1';
$route['brand/update/(:any)']['POST'] = 'BrandController/update/$1';
//Brand delete
$route['brand/delete/(:any)']['GET'] = 'BrandController/delete/$1';