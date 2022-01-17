<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    //funkcja znajdująca użytkownika po jego emailu
    public function getUser(string $email): ?User
    {
        //odwołujemy się do bazdy danych, następnie do funkcji connect i jej metody
        $stmt = $this->database->connect()->prepare('   
            SELECT * FROM public.users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC); //pobieramy użytkownika do zmiennej tymczasowej i zapisujemy do tabeli aso.

        if ($user == false) {
            return null;
        }

        return new User(  //zwracamy cały obiekt uzytkownika i go tworzymy
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['date']
        );
    }
}