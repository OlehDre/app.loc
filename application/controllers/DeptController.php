<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        if (!empty($_POST)) {

        }
        $this->view->render('All Dept');
    }

    public function showAllDeptAction() {
        $result = $this->model->getDepts();
        $vars = [
            'dept' => $result,
        ];
        $this->view->render('All Dept', $vars);
    }

    public function deleteDeptAction() {
        $this->view->render('Delete Dept');
    }
}