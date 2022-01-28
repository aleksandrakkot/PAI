<?php
//controller ustwiania zdjęcia

require_once 'AppController.php';


class PhotoController extends AppController {

    const  MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    public function addPhoto()
    {
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])){  //sprawdzamy czy plik jest dotowy do uploadu
           move_uploaded_file(
               $_FILES['file']['tmp_name'],
               dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name'] //łączymy ścieżkę do katalogu, ścieżkę do uploadu i dołączamy nazwe pliku
           );

            return $this->render('addPhoto', ['messages' => $this->message]);
        }
        $this->render('addPhoto', ['messages' => $this->message]);
    }

    private function validate(array $file): bool
    {
        if($file['size'] > self::MAX_FILE_SIZE){    //sprawdzamy wielkość pliku
             $this-> message[]= 'File is too large for destination file system.';
             return false;
        }


        if(!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)){
            $this->message[] = 'File type is not supported';
            return false;
        }

        return true;
    }
}