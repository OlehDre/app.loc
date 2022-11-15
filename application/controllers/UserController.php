<?php

    namespace application\controllers;

    use application\core\Controller;

    class UserController extends Controller {

        public function createUserAction() {
            echo 'Create new user';
        }

        public function showAllUsersAction() {
            echo 'Show all users';
        }

        public function showUserAction() {
            echo 'Show this user';
        }
    }