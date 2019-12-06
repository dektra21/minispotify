<?php

session_start();
require '../include/connection.php';

$page = isset($_GET['page']) ? $_GET['page'] : NULL;

if ($page == 'dashboard') {
    require 'dashboard.php';
}
else {
    require 'login.php';
}

?>
