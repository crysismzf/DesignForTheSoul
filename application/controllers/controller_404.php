<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.03.2019
 * Time: 15:59
 */

class Controller_404 extends Controller
{
   function __construct()
   {
       $this->view = new View();
   }
   function action_index()
   {
       parent::action_index(); // TODO: Change the autogenerated stub
       $this->view->generate("404_view.php");
   }


}