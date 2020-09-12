<?php
//include 'dbh.classes.php';
class Test extends Bdh{
    public function getUser(){
        $sql = "SELECT * FROM users";
        $stmt = $this->Connect()->query($sql);
        while($row = $stmt->fetch()){
            echo "<label>User name: ".$row['username'].'</label><br>';
        }
    }
    public function getUserStmt($userName){
        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $this->Connect()->prepare($sql);
        $stmt->execute([$userName]);// thực thi dấu ?
        $names = $stmt->fetchAll();
        foreach($names as $name){
            echo "<label>User name: ".$name["username"].' password: '.$name["password"].'</label><br>';
        }
    }
    public function setUserstmt($userName, $pwd){
        $sql = "INSERT INTO users(username,password) VALUES(?,?)";
        $stmt = $this->Connect()->prepare($sql);
        $stmt->execute([$userName,$pwd]);// thực thi giá trị của dấu ?
    } 
}
?>