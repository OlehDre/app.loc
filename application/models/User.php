<?php

namespace application\models;

use application\core\Model;
use PDO;

class User extends Model{

    public function getUsers(){
        return $this->db->row('SELECT * FROM users');
    }

    public function getUser($data){
        return $this->db->row('SELECT * FROM users WHERE mail = (:mail)', $data);
    }

    public function createUser($data){
        $this->db->query('INSERT INTO users (mail, name, address, phone, comment, dept) VALUES (:mail, :name, :address, :phone, :comment, :dept)', $data);
    }

}