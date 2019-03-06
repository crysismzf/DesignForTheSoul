<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:01
 */

class Controller_main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php');
    }
}