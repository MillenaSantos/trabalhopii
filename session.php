<?php

setcookie('login', null, -1, '/');
session_destroy();
header("location: home.html");

?>