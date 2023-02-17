<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class RegisterController extends AppController
{
    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        if (empty($email)) {
            return $this->render('register', ['messages' => ['No email entered']]);
        } else {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match($pattern, $email)) {
                return $this->render('register', ['messages' => ['Wrong email format']]);
            }
        }

        if (empty($password)) {
            return $this->render('register', ['messages' => ['No password entered']]);
        }

        if (empty($name)) {
            return $this->render('register', ['messages' => ['No name entered']]);
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                return $this->render('register', ['messages' => ['Wrong name format']]);
            }
        }

        if (empty($surname)) {
            return $this->render('register', ['messages' => ['No surname entered']]);
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                return $this->render('register', ['messages' => ['Wrong surname format']]);
            }
        }

        if (empty($phone)) {
            return $this->render('register', ['messages' => ['Not entered number phone']]);
        } else {
            if (!preg_match("/^[0-9]*$/", $phone)) {
                return $this->render('register', ['messages' => ['Invalid phone number format']]);
            }
        }

        $userRepository = new UserRepository();

        $userRepository->addUser($name, $surname, $email, password_hash($password, PASSWORD_BCRYPT, $options = ['cost' => 12]), $phone);

        return $this->render('login', ['messages' => ['Account created!']]);
    }
}