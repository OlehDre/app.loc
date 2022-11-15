<?php

namespace application\core;

use application\lib\DB;

abstract class Model{

    public $db;

    function __construct(){
        $this->db = new DB;
    }
}