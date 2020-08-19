<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
require_once "./mvc/bridge.php";
$myApp = new App();

?>