<?php

require_once 'AppController.php';

class  DefaultController extends AppController{
    
    public function index()
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

    public function shifts()
    {
        $this->render('shifts');
    }

    public function holidays()
    {
        $this->render('holidays');
    }

    public function workedtime()
    {
        $this->render('workedtime');
    }

    public function swap()
    {
        $this->render('swap');
    }
    // public function dashboard()
    // {
    //      //TO_DO get data from database
    //      $items = ['kurtka', 'szafa', 'biurko'];

    //     $this->render('dashboard', ['items'=> $items]);
    // }
    
}