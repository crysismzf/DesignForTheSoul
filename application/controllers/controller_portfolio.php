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
        $this->model = new Model_portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $user_db = $this->model->get_user_db();
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', $user_db, $data);

    }
}

