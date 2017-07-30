<?php 
require_once ("header.php");
require_once ("components/homepage_components.php"); 
require_once ("components/shared_components.php"); 

echo homepage_carousel();
echo homepage_about_me();
echo homepage_experience_slider();
echo homepage_work_experience();
echo homepage_portfolio();


echo shared_contact_me();


include ("footer.php"); ?>