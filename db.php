<?php

class Database{
    private $dsn = "mysql:host=localhost;dbname=quize";
    private $dbuser = "root";
    private $dbpass = "";

    public $conn;

    public function __construct()
    {
        try{
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            // echo 'Connected to database';
        }
        catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
        return $this->conn;
    }

    // function to fetch all data from the databse
    public function fetchData(){
        $sql  = 'select * from questions';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function insertData($fullname, $email, $phone){
        try
        {
          $sql = 'INSERT INTO users ( name, email, phone) VALUES (:name, :email, :phone)';
          
          $stm = $this->conn->prepare($sql);
          
          $stm->execute([
            'name' => $fullname,
            'email' => $email,
            'phone' => $phone
          ]);
          return true;
        }
        catch (PDOException $e)
        {
          return $e->getMessage();
        }
      }

}
// $ob = new Database();
?>