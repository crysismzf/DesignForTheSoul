<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06.03.2019
 * Time: 20:15
 */

class Model_portfolio extends Model
{
    public function get_user_db()
    {
        include 'config.php';
        $pdo = new PDO("mysql:host={$db_host}; dbname={$db_name}",
            $db_user, $db_user_pass);

        $data = $pdo
            ->query("SELECT `user`.vk, `user`.twitter, 
         `user`.instagram, `user`.facebook  FROM `user`;")
            ->fetchAll();
        return $data;
    }
}