<?php

/**
 * ===============================================================
 * VERSION 0.0.1
 * ===============================================================
 */

/**
 * ===============================================================
 * AUTHORS
 * ===============================================================
 * - Anas  : https://github.com/anas-hatim
 * - Tarek : https://github.com/Tarek-69
 * - Maher : https://github.com/MaHeR7F
 * - Alain : https://github.com/alain-guillon-it
 * ===============================================================
 */

/**
 * ===============================================================
 * SHOW ERRORS
 * ===============================================================
 */
ini_set("display_errors", true);

require "./vendor/autoload.php";

$_controller = null ;
$_action = null ;
$_id =null ;

if (
    $_SERVER["REQUEST_URI"]=="/" OR
    $_SERVER["REQUEST_URI"]=="/home"
)
{
    $_controller = "home";
}
else{
    $_controller = "error";
}


if(
    isset($_GET["page"]) && !empty($_GET["page"])
){
    $getPage = trim(htmlspecialchars(strtolower($_GET["page"])));
    $checkPageValide = ["home"];
    $_controller = in_array($getPage,$checkPageValide) ? $getPage : "error";
}

$controllerName = "Collaborative\\ProjectGitMvcPoo\\Controllers\\" . ucfirst($_controller) . "Controller" ;
$page = new $controllerName;

include "./Public/Partials/_header.php";
if ($_action == null) {
    include "./Public/Views/" . ucfirst($_controller) . "/" . ucfirst($_controller) . "View.php";
} else {
    // à faire
}
include "./Public/Partials/_footer.php";


// var_dump($_controller,$_action,$_id,$_SERVER["REQUEST_URI"])
// var_dump($_controller,$_action,$_id,$_GET["page"])
// var_dump($_controller,$_action,$_id,$controllerName,$page)
?>