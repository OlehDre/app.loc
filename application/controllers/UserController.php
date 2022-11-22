<?php

    namespace application\controllers;

    use application\models\Dept;
    use application\core\Controller;

    class UserController extends Controller {

        public function createUserAction() {
            $data = $_POST;
            $user = $this->model->getUser(['mail' => $data['mail']]);
            if($user){
                echo 'User with that mail already exists';
                exit();
            }else{
                $this->model->createUser($data);
                $this->view->redirect('/add/user');
            }
        }

        public function addUserAction(){
            $depts = (new Dept)->getDepts();
            $var = [
                'dept' => $depts,
            ];
            $this->view->render('Create User', $var);
        }

        public function showAllUsersAction() {
            $result = $this->model->getUsers();
            $vars = [
                'users' => $result,
            ];
            $this->view->render('All Users', $vars);
        }

        public function showUserAction() {
            $data = $_POST;
            $user = $this->model->getUser($data);
            $vars = [
                'user' => $user,
            ];
            $this->view->render('User', $vars);
        }
    }