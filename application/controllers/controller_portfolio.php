<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:01
 */

class Controller_portfolio extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('portfolio_view.php');
    }
}

