<?php
//include our settings, connect to database etc.
// include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';

//getting required data
$pagetitle = "Therapy";
//etc

//and then call a template:
$tpl = "pages/therapy.tpl.php";
include "template.php";
?>