<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:00
 */

class Controller_Contacts extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('contacts_view.php');
    }
}
