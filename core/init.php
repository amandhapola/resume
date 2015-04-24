<?php
session_start();
// error_reporting(1);
// error_reporting(E_ALL);

//just delete the 'resume' from the path and it will work 
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/resume/core/database/connect.php'))
{
require($_SERVER['DOCUMENT_ROOT'].'/resume/core/database/connect.php');
}
else{
  echo "database file doesn exist";
}
// require ('function.php');

$errors=array();
// echo "****";
// print_r($errors);
?>
