<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        echo 'Create new dept';
    }

    public function showAllDeptAction() {
        echo 'Show all departments';
    }

    public function deleteDeptAction() {
        echo 'Delete this dept';
    }
}