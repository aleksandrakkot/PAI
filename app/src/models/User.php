<?php

class User {
    private $email;
    private $password;
    private $name;
    private $surname;
    private $date;

    public function __construct(
        string $email,
        string $password,
        string $name,
        string $surname,
        string $date

    ) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->date = $date;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getDate()
    {
        return $this->date;
    }
}