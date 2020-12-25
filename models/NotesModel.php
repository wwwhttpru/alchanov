<?php

class NotesModel extends Model
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

    public function getNotes()
    {
        $sql = "SELECT 
                notes.id,
                notes.created,
                notes.title,
                notes.article
                FROM `notes`";

        return $this -> tryGetData($sql);
    }

}
