<?php

class RegisterModel extends Model
{

    public function registerUser()
    {

        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO  `authors` (`id` ,`login` ,`password` , `rights`)
                        VALUES (
                        NULL, :login, :password, 'u');";

        $stmt = $this->db->prepare($sql);
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
