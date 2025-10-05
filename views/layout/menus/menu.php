<?php
// $folder="views/layout/menus";

// //include "{$folder}/table_menu.php";

// foreach (glob("{$folder}/*_menu.php") as $filename)
// {
//   if("{$folder}/table_menu.php"==$filename)continue;
//     include $filename;
// }

include_once 'views/layout/menus/dashboard_menu.php';
include_once 'views/layout/menus/catalog_menu.php';
include_once 'views/layout/menus/orders_menu.php';

include_once 'views/layout/menus/customers_menu.php';
include_once 'views/layout/menus/vendors_menu.php';
include_once 'views/layout/menus/finance_menu.php';
include_once 'views/layout/menus/reports_menu.php';
include_once 'views/layout/menus/pages_menu.php';
include_once 'views/layout/menus/administration_menu.php';
include_once 'views/layout/menus/authentication_menu.php';
