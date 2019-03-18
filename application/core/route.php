<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 15:10
 */

class Route
{
    static function start()
    {
        
        $controller_name = 'Main';
        $action_name = 'index';
        $data_name='';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        if ( !empty($routes[3]) )
        {
            $data_name = $routes[3];
        }

        
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

       

        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            
            Route::ErrorPage404();
            exit();
        }

       
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            if (!empty($data_name)) {
                $controller->$action($data_name);
            } else {
                $controller->$action();
            }

        }
        else
        {
            
            Route::ErrorPage404();
            exit();
        }

    }

   static function ErrorPage404()
    {

       $controller_file = "controller_404.php";
       include "application/controllers/".$controller_file;
       $controller = new Controller_404();
       $controller -> action_index();


    }
}