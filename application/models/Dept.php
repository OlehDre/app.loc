<?php

namespace application\models;

use application\core\Model;

class Dept extends Model{

    public function getDepts(){
        $result = $this->db->row('SELECT * FROM dept');
        return $result;
    }

    public function deleteDept($data){
        $this->db->query('DELETE FROM dept WHERE title = (:title)', $data);
    }

    public function createDept($data){
        $this->db->query('INSERT INTO dept (title) VALUES (:title)', $data);
    }

}