<?php
session_start();
define("APP_NAME", 'MEGA NOTE APP');

if (isset($_SESSION['notes'])) {
    $count = count($_SESSION['notes']);
} else {
    $count = 0;
}
