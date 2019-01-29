<?php
session_start();
$counterstand = intval(file_get_contents("count_file.txt"));
 
if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   file_put_contents("count_file.txt", $counterstand);
 
   $_SESSION['counter_ip'] = true;
   }
 
echo $counterstand;
?>
