<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        $data= $_POST;
        if($data['title'] == ' '){
            echo 'Enter valid title';
            exit();
        }elseif (($this->model->searchDept($data))){
            echo 'Department with that title already exists';
            exit();
        }else {
            $this->model->createDept($data);
            $this->view->redirect('/depts');
        }
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