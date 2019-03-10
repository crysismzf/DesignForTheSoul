<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 16:04
 */

class Controller_services extends Controller
{
    function __construct()
    {
        $this->model = new Model_services;
        $this->view = new View();
    }

    function action_index()
    {
        $user_db = $this->model->get_user_db();
        $data = $this->model->get_data();
        $this->view->generate('services_view.php', $user_db, $data);
    }
}
