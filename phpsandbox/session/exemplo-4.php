<?php 

session_id('7g7jfshvhvddi85ftha41md9pc');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>