<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 21:46
 */

class Controller_album extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('album_view.php');
    }
}


