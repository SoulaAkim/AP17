<?php
class Queries
{
    // DSN : Data Source Name
    private $dsn = "mysql:dbname=ap;host=127.0.0.1;charset=utf8";
    private $user = "root";
    private $password = "root";
    public $db;
    function __construct()
    {
        try {
            $this -> db = new PDO($this -> dsn, $this -> user, $this -> password);
            $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch (PDOException $e) {
            Log::logWrite($e -> getMessage());

        }
    }
    function insert($sql) {
        return $this -> db -> exec($sql);
    }


    function check ($sql) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }



    function __destruct()
    {
        unset($this -> db);
    }
}