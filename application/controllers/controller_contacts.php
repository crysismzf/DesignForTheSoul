<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:00
 */

class Controller_contacts extends Controller
{
    function __construct()
    {
        $this->model = new Model_contacts;
        $this->view = new View();
    }

    function action_index()
    {
        $user_db = $this->model->get_user_db();
        $this->view->generate('contacts_view.php',$user_db);
    }
}
