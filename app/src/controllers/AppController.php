<?php

class AppController {

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