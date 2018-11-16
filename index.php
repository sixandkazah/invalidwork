<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/engine.php";

$mainPage = new App("Главная");

$title = $mainPage->title;

$menu = $mainPage->getMenu();

$mainPage->getHeader($title, $menu);

$mainPage->getContent();

$mainPage->getFooter();

?>