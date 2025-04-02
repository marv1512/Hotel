<?php
function login($username){
    $_SESSION['user'] = $username;
}