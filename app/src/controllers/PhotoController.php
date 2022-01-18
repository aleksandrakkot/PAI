<?php
//controller ustwiania zdjęcia

require_once 'AppController.php';


class PhotoController extends AppController {

    public function addPhoto()
    {
        $this->render('addPhoto');
    }
}