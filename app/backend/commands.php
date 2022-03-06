<?php

class User extends  DBO {

  public function getAllUsers(){
    $stmt = $this->connect()->query("SELECT * FROM employee");
    while ($row = $stmt->fetch()){
      $userid = $row['userid'];
      return $userid;
    }
  }

    public function getUsersWithCountCheck($userid, $position){
      $sql = "SELECT * FROM  employee WHERE userid = ? AND position = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$userid, $position]);
      $names = $stmt->fetchAll();

      foreach($names as $name){
        return "ID: ".$name['id'] ."  |USERID:  ".$name['userid']."  |FULLNAME:  ".$name['fullName']."  |DATE OF BIRTH:  ".$name['dob']."  |SSN:  ".$name['ssn']."  |HIRE DATE:  ".$name['hireDate']."  |POSITION ID:  ".$name['position']."  |STREET ADDRESS:  ".$name['streetAddress']."  |CITY:  ".$name['city']."  |STATE:  ".$name['state']."  |ZIP:  ".$name['zip']."  |MAIN PHONE NUMBER:  ".$name['contactPhone']."  |SEC PHONE NUMBER:  ".$name['secContactPhone'].'<br>';
      }
    }
}
?>