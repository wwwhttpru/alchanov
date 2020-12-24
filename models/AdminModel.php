<?php

class AdminModel extends Model {


    public function getCountSuperUsers() {
        $sql = "SELECT COUNT(*) FROM `authors` WHERE rights = 'a'";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (Exception $err) {
            echo "Произошла ошибка $err";
        }
    }

    public function getCountUsers() {
        $sql = "SELECT COUNT(*) FROM `authors` WHERE rights = 'u'";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (Exception $err) {
            echo "Произошла ошибка $err";
        }
    }

    public function getNotes() {
        $sql = "SELECT COUNT(*) FROM `notes`";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (Exception $err) {
            echo "Произошла ошибка $err";
        }
    }

    public function getComments() {
        $sql = "SELECT COUNT(*) FROM `comments`";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (Exception $err) {
            echo "Произошла ошибка $err";
        }
    }
}