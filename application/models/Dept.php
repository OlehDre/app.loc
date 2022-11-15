<?php

namespace application\models;

use application\core\Model;

class Dept extends Model{

    public function getDepts(){
        $result = $this->db->row('SELECT * FROM dept');
        return $result;
    }

    public function deleteDept(){

    }

    public function createDept(){

    }

}