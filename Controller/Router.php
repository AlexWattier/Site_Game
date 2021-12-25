<?php
require 'Controller/ControllerActions.php';

function routeRequest() {
    define("DEFAULT_ACTION", "allPosts");
    //Permet de choisir une action si aucune n'est renseignée dans le GET
    $action = !empty($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;
    try {
        if (function_exists($action)) {
            $action();
        } else {
            require "View/ViewError.php";
        }
    } catch (Exception $e) {
        require "View/ViewError.php";
    }
}
