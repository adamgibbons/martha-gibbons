<?php
//include our settings, connect to database etc.
// include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';

//getting required data
$pagetitle = "Homepage";
//etc

//and then call a template:
$tpl = "pages/recordings.tpl.php";
include "template.php";
?>