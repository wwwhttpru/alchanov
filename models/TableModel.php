<?php

class TableModel extends Model
{

    private function tryGetData($sqlQuery) {
        try {
            $result = array();
            $stmt = $this->db->prepare($sqlQuery);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $result[$row['id']] = $row;
            }
            return $result;
        } catch (Exception $err) {
            echo "Произошла ошибка $err";
        }
    }

    public function getUsers()
    {
        $sql = "SELECT 
                authors.id as 'Идентификатор',
                authors.login as 'Логин',
                authors.password as 'Пароль (md5)',
                authors.rights as 'Права'
                FROM `authors`";
        return $this -> tryGetData($sql);
    }

    public function getNotes()
    {
        $sql = "SELECT 
                notes.id as 'Идентификатор',
                notes.created as 'Дата создания',
                notes.title as 'Заголовок',
                notes.article as 'Статья'
                FROM `notes`";
        return $this -> tryGetData($sql);
    }

    public function getComments()
    {
        $sql = "SELECT
                comments.id as 'Идентификатор',
                comments.created as 'Дата создания',
                comments.author_id as 'Автор',
                comments.comment as 'Коментарий',
                comments.art_id as 'Заметка'
                FROM `comments`";
        return $this -> tryGetData($sql);
    }


}