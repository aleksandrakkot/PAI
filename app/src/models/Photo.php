<?php

class Photo
{

    private $image;
    private $title;

    public function __construct($image, $title)
    {
        $this->image = $image;
        $this->title = $title;
    }

    public function getImage():string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

}