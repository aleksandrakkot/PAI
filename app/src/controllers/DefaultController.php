<?php

require_once 'AppController.php';
require_once 'PhotoController.php';

class  DefaultController extends AppController{



    public function index()
    {
        $this->render('login');
    }

    public function homepage()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('homepage', $data);
        }
    }

//    const  MAX_FILE_SIZE = 1024*1024;
//    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
//    const UPLOAD_DIRECTORY = '/../public/uploads/';
//
//    private $message = [];
//    public function addPhoto()
//    {
//        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])){  //sprawdzamy czy plik jest dotowy do uploadu
//            move_uploaded_file(
//                $_FILES['file']['tmp_name'],
//                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name'] //łączymy ścieżkę do katalogu, ścieżkę do uploadu i dołączamy nazwe pliku
//            );
//
//
//            //return $this->render('user', ['messages' => $this->message]);
//        }
//        //$this->render('user', ['messages' => $this->message]);
//
//        if(isset($_COOKIE["user_email"]))
//        {
//            $userRepository = new UserRepository();
//            $email = $_COOKIE["user_email"];
//            $user = $userRepository->getUser($email);
//            $data = array();
//            $data["user"] = $user;
//            $this->render('user', $data);
//        }
//    }
//
//    private function validate(array $file): bool
//    {
//        if($file['size'] > self::MAX_FILE_SIZE){    //sprawdzamy wielkość pliku
//            $this-> message[]= 'File is too large for destination file system.';
//            return false;
//        }
//
//
//        if(!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)){
//            $this->message[] = 'File type is not supported';
//            return false;
//        }
//
//        return true;
//    }

    public function user()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('user', $data);
        }
    }

    public function shifts()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('shifts', $data);
        }
    }

    public function holidays()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('holidays', $data);
        }
    }

    public function workedtime()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('workedtime', $data);
        }
    }

    public function swap()
    {
        if(isset($_COOKIE["user_email"]))
        {
            $userRepository = new UserRepository();
            $email = $_COOKIE["user_email"];
            $user = $userRepository->getUser($email);
            $data = array();
            $data["user"] = $user;
            $this->render('swap', $data);
        }
    }

    // public function dashboard()
    // {
    //      //TO_DO get data from database
    //      $items = ['kurtka', 'szafa', 'biurko'];

    //     $this->render('dashboard', ['items'=> $items]);
    // }
    
}