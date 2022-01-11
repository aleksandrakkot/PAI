<?php //pozwoli nam na utworzenie połączenia poprzez biblioteke PDO z bazą danych

require_once "config.php";

class Database
{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    //funkcja łącząca nas z bazą danych
    public function connect()
    {
        try { //łączymy się z bazą danych
            $conn = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode"  => "prefer"] //opcjonalny klucz
            );

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //wyświetlamy błędy
            return $conn; //zwracamy połączenie
        }
        catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}