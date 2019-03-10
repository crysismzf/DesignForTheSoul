<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.03.2019
 * Time: 15:30
 */

class Model_album extends Model
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
    public function get_special_data($data_name)
    {
        include 'config.php';
        $pdo = new PDO("mysql:host={$db_host}; dbname={$db_name}",
            $db_user, $db_user_pass);

        $data = $pdo
            ->query("SELECT album.`name`, album.`description`,
foto.`extension`, foto.`id_album` FROM album, foto WHERE album.`id`={$data_name} && foto.`id_album`={$data_name}")
            ->fetchAll();
        return $data;
    }

}