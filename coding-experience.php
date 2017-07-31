<?php 
require_once ("header.php");
require_once ("components/experience_components.php"); 
require_once ("components/shared_components.php"); 

echo experience_summary();
echo languages_summary();



echo shared_contact_me();



include ("footer.php"); 

?>