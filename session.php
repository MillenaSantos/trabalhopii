<?php

setcookie('login');
session_destroy();
header("location: home.html");

?>