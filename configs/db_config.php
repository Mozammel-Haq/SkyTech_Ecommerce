<?php
//Remote

// define("SERVER", "sql208.infinityfree.com");
// define("USER", "if0_39936208");
// define("DATABASE", "if0_39936208_skytech");
// define("PASSWORD", "mozammel29");

// Local

define("SERVER", "localhost");
define("USER", "root");
define("DATABASE", "skytech");
define("PASSWORD", "");


$db = new mysqli(SERVER, USER, PASSWORD, DATABASE);
// $tx = "core_";
