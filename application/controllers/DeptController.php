<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function createDeptAction() {
        $data= $_POST;
        if($data['title'] == ' ' || $data['title'] == '  '){
            $error = 'Enter valid title';
            $result = $this->model->getDepts();
            $vars = [
                'dept' => $result,
                'error' => $error,
            ];
            $this->view->render('All Dept', $vars);
        }elseif (($this->model->searchDept($data))){
            $error = 'Department with that title already exists';
            $result = $this->model->getDepts();
            $vars = [
                'dept' => $result,
                'error' => $error,
            ];
            $this->view->render('All Dept', $vars);
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