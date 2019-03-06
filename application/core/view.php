<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 15:46
 */

class View
{
    function generate($content_view, $user_db=null,$data=null)
    {

        include 'application/views/'.$content_view;
    }
}