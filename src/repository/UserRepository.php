<?php

use exceptions\UnknownUsersException;

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../exceptions/UnknownUsersException.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['phone']
        );
    }

    public function addUser(string $name, string $surname, string $email, string $password, string $phone)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (
                     name,
                     surname,
                     email,
                     password,
                     phone)
            VALUES (?, ?, ?, ?, ?)
        ');


        $stmt->execute([
            $name,
            $surname,
            $email,
            $password,
            $phone
        ]);
    }
}