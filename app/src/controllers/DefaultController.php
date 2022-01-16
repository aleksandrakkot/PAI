<?php

require_once 'AppController.php';

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