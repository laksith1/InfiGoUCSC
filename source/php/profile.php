
<?php
session_start();
//==========================================admin profile==============================================
if  ((isset($_SESSION["admin"])) ||(isset($_SESSION["chief_editor"]))  ||(isset($_SESSION["editor"])) ||(isset($_SESSION["data_entry"]))){
header("Location:../admin/index.php");
exit;
}
//==========================================contributor frofile===============================================
if (isset($_SESSION["contributor"])){
header("Location:../contributor/index.php");
exit;
}

//=============================================================================

header("Location:../index.php");
exit;

?>
