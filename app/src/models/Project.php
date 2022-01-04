<?php


class Project
{
    private string $name;
    private string $surname;
    private int $emial;
    private int $date;

    public function __construct(string $name,
                                string $surname,
                                int    $emial,
                                int    $date,)
    {
        $this-$name = $name;
        $this->surname$surname = $surname;
        $this->emial = $emial;
        $this->date = $date;
    }

    public function getName(): string
    {
        return $this->$name;
    }

    public function setName(string $name): void
    {
        $this->$name = $name;
    }

    public function getSurname(): string
    {
        return $this->$surname;
    }

    public function setSurname(string $surname): void
    {
        $this->$surname = $surname;
    }

    public function getEmail(): int
    {
        return $this->$emial;
    }

    public function setEmial(int $emial): void
    {
        $this->$emial = $emial;
    }

    public function getdate(): int
    {
        return $this->$date;
    }

    public function setdate(int $date): void
    {
        $this->$date = $date;
    }
}