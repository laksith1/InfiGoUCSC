
<?php
session_start();
//==========================================admin logout==============================================
if (isset($_SESSION["admin"])){
unset($_SESSION["admin"]);

}
//==========================================ce logout===============================================
if (isset($_SESSION["chief_editor"])){
unset($_SESSION["chief_editor"]);

}
//========================================editor logout===============================================
if (isset($_SESSION["editor"])){
unset($_SESSION["editor"]);

}
//======================================data entry logout=================================================
if (isset($_SESSION["data_entry"])){
unset($_SESSION["data_entry"]);

}
//=============================================contributor logout============================================
if (isset($_SESSION["contributor"])){
unset($_SESSION["contributor"]);
}

header("Location:../index.php");
exit;

?>
