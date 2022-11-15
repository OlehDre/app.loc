<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        $this->view->render('Create Dept');
    }

    public function showAllDeptAction() {
        $this->view->render('All Dept');
    }

    public function deleteDeptAction() {
        $this->view->render('Delete Dept');
    }
}