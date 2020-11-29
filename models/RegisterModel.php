<?php

class RegisterModel extends Model
{

    public function registerUser()
    {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO  `users` (`id` ,`name` ,`login` ,`password`)
                        VALUES (
                        NULL, :name, :login, :password);";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $name, PDO::PARAM_STR);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();


        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if (empty($res)) {
            header("Location: /");
        } else {
            return false;
        }
    }
}
