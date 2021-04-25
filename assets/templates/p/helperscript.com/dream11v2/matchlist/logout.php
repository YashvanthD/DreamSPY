<?php
session_start();
session_destroy();
echo '<h1> Successfully Logged Out</h1>';
echo '<meta http-equiv="refresh" content="1; url = http://3.141.85.106/" ?>';
?>