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
        $this->model = new Model_album;
        $this->view = new View();
    }

    function action_index()
    {
        Route::ErrorPage404();
    }
    function action_open ($data_name) {
        if (empty($data_name)) {
            Route::ErrorPage404();
        } else {
            $data = $this->model->get_special_data($data_name);
            if (!empty($data)) {
                $user_db = $this->model->get_user_db();
                $this->view->generate('album_view.php', $user_db, $data);
            } else {
                Route::ErrorPage404();
            }
        }

    }
}


