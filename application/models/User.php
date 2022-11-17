<?php

namespace application\models;

use application\core\Model;
use PDO;

class User extends Model{

    public function getUsers(){
        $result = $this->db->row('SELECT * FROM users');
        return $result;
    }

    public function getUser($data){
        $result = $this->db->row('SELECT * FROM users WHERE mail = (:mail)', $data);
        return $result;
    }

    public function createUser($data){
        $this->db->query('INSERT INTO users (mail, name, address, phone, comment, dept) VALUES (:mail, :name, :address, :phone, :comment, :dept)', $data);
    }

}