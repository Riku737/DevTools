<?php

// Directories
define("PROJECT_ROOT", dirname(__DIR__)); // Returns full directory: moves up one level to project root
define("PRIVATE_PATH", __DIR__); // 
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("PUBLIC_PATH", PROJECT_ROOT . '/public');

// Root
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

// Load All Classes
foreach (glob(PRIVATE_PATH . "/classes/*.php") as $file) {
    include($file);
}

// Back-end
require_once('database.php');
require_once('functions.php');
