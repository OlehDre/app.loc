<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        $data= $_POST;
        $this->model->createDept($data);
        $this->view->redirect('/depts');
    }

    public function showAllDeptAction() {
        $result = $this->model->getDepts();
        $vars = [
            'dept' => $result,
        ];
        $this->view->render('All Dept', $vars);
    }

    public function deleteDeptAction() {
        $data= $_POST;
        $this->model->deleteDept($data);
        $this->view->redirect('/depts');
    }
}