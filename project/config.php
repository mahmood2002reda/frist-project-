<?php

 session_start();

 define("BURL","http://localhost/m25r/project/");
 define("BURLA","http://localhost/m25r/project/admin/");
 define("ASSETS","http://localhost/m25r/project/assets/");
define ("BL", __DIR__.'/');
define ("BLA", __DIR__.'/admin/');

//connect to database
require_once (BL.'function/db.php' );