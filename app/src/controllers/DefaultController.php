<?php

require_once 'AppController.php';

class DefaultController extends AppController{
    
    public function login()
    {
        $this->render('login');
    }

    public function homepage()
    {
        $this->render('homepage');
    }

    public function user()
    {
        $this->render('user');
    }
    // public function dashboard()
    // {
    //      //TO_DO get data from database
    //      $items = ['kurtka', 'szafa', 'biurko'];

    //     $this->render('dashboard', ['items'=> $items]);
    // }
    
}