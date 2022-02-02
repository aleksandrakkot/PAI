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

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        //TODO try to use better hash function
        $user = new User($email, md5($password), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
}