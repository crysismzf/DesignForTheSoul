<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:04
 */

class Controller_services extends Controller
{
//    function __construct()
//    {
//        $this->view = new View();
//    }

    function action_index()
    {
        $this->view->generate('services_view.php');
    }
}
