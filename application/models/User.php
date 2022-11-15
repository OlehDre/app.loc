<?php

namespace application\models;

use application\core\Model;

class User extends Model{

    public function getUsers(){
        $result = $this->db->row('SELECT * FROM users');
        return $result;
    }

    public function getUser(){
        $result = $this->db->row('SELECT * FROM users WEHERE mail ');
        return $result;
    }

    public function createUser(){

    }

}