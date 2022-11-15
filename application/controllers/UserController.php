<?php

    namespace application\controllers;

    use application\core\Controller;

    class UserController extends Controller {

        public function createUserAction() {
            $this->view->render('Create User');
        }

        public function showAllUsersAction() {
            $result = $this->model->getUsers();
            $vars = [
                'users' => $result,
            ];
            $this->view->render('All Users', $vars);
        }

        public function showUserAction() {
            $this->view->render('User');
        }
    }