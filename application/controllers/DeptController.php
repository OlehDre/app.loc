<?php

namespace application\controllers;

use application\core\Controller;

class DeptController extends Controller {

    public function showAllDeptAction() {
        $result = $this->model->getDepts();
        $data= $_POST;
        if (!empty($data)){
            if($data['title'] == ' ' || $data['title'] == '  '){
                $error = 'Enter valid title';
                $vars = [
                    'dept' => $result,
                    'error' => $error,
                ];
                $this->view->render('All Dept', $vars);
            }elseif (($this->model->searchDept($data))){
                $error = 'Department with that title already exists';
                $vars = [
                    'dept' => $result,
                    'error' => $error,
                ];
                $this->view->render('All Dept', $vars);
            }else {
                $this->model->createDept($data);
                $this->view->redirect('/depts');
            }
        }else {
            $vars = [
                'dept' => $result,
            ];
            $this->view->render('All Dept', $vars);
        }
    }

    public function deleteDeptAction() {
        $data= $_POST;
        $this->model->deleteDept($data);
        $this->view->redirect('/depts');
    }
}