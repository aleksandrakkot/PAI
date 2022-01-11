<?php

class AppController {

    private $request;
    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD']; //sprawdzamy czy jest to metoda GET czy POST
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = []) //metoda będzie dziedziczona przez inne klasy
    {
        $templatePath = 'public/views/'. $template.'.php';
        $output = 'File not found';
                
        if(file_exists($templatePath)){  //czy istnieją pliki z tym rozszerzeniem
            extract($variables); //
            
            ob_start();  //otwarcie strumienia binernego
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }
}