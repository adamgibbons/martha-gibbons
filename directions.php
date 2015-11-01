<?php
//include our settings, connect to database etc.
// include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';

//getting required data
$pagetitle = "Directions";
//etc

//and then call a template:
$tpl = "pages/directions.tpl.php";
include "template.php";
?>