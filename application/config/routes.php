<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['(?!ideazoneall)(?!businessideas)(?!Earn)(?!Gain)(?!Ideazone)(?!User)(?!Learn)(:any)'] = 'Home/index/$1';
$route['tag/(:any)'] = 'Tag/tag/$2';
$route['business-ideas'] = 'businessideas';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = TRUE;
