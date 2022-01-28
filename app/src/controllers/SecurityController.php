<?php
//controller do logowania, wylogowywania i rejestracji

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email']; //przechwytujemy dane
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        $pwd_peppered = hash_hmac("sha256", $password, "1234");
        if (!$user) { //sprawdzamy czy dany użytkownik istnieje
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($pwd_peppered != $user->getPassword()) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        setcookie("user_email",$email, time() + (86400 * 30), "/");

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homepage");
    }
}