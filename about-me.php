<?php 
include ("header.php");
include ("components/about_me_components.php"); 
include ("components/shared_components.php"); 

echo about_me_summary();
echo about_me_content();
echo about_profile_links();
echo homepage_youtubeChannels();
echo shared_contact_me();


include ("footer.php"); ?>