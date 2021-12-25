<?php function pre($a){
    echo '<pre style="background-color: chocolate;color: #f2f2f2;padding: 15px;font-size: 12px;">' ;
    print_r($a) ;
    echo '</pre>' ;
}
require "Controller/Router.php";
routeRequest();