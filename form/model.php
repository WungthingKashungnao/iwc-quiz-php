<?php
require_once './db.php';
class CRUD extends Connection {

  public function insertData($fullname, $email, $phone, $pswd){
    try
    {
      $database = new Connection();
      $db = $database->openConnection();
      $sql = 'INSERT INTO users (fullname, email, phone, pswd) VALUES (:fullname, :email, :phone, :pswd)';
      
      $stm = $db->prepare($sql);
      
      $stm->execute([
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'pswd' => $pswd
      ]);
      return true;
    }
    catch (PDOException $e)
    {
      return $e->getMessage();
    }
  }
  
}

?>
