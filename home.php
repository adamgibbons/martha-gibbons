<?php
//include our settings, connect to database etc.
// include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';

//getting required data
$pagetitle = "";
//etc

//and then call a template:
$tpl = "pages/home.tpl.php";
$splash = true;
include "template.php";
?>