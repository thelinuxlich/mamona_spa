<?php
function add_routes($app) {
	$app->get('/',function() use($app) { $app->render("template.php"); });

    // catch-all route
    $app->map('/:route_path+',function($route_path){
        $controller = ucfirst(strtolower($route_path[0]))."Controller";
        if(count($route_path) == 2) {
            $controller::$route_path[1]();
        } else if(count($route_path) == 3) {
            $controller::$route_path[1]($route_path[2]);
        }
    })->via("GET","POST");
}