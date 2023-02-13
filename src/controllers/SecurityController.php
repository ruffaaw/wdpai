<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{

    function hash_password($password) {
        $options = [
            'cost' => 12,
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    function verify_password($password, $hashed_password) {
        if (password_verify($password, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    }

    public function login()
    {
        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user) {
            $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!$this->verify_password($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ["Wrong password"]]);
        }

/*        return $this->render('projects');*/

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");

    }
}