<?php

    namespace application\controllers;

    use application\core\Controller;

    class UserController extends Controller {

        public function createUserAction() {
            $this->view->render('Create User');
        }

        public function showAllUsersAction() {
            $this->view->render('All Users');
        }

        public function showUserAction() {
            $this->view->render('User');
        }
    }