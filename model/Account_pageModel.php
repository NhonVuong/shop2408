<?php

include_once 'DBConnect.php';
class Account_pageModel extends DBConnect{
    function selectUser($username){
        $sql = "SELECT username 
                FROM users 
                WHERE username='$username'";
       return  $this->loadOneRow($sql);
    }

    function selectLogin($username, $password){
        $sql = "SELECT username,password 
                FROM users 
                WHERE username='$username' AND password='$password'";
       return  $this->loadOneRow($sql);
    }

    function insertUser($username, $password, $fullname, $birthdate, $gender, 
                        $address, $email, $phone){ 
        $sql = "INSERT INTO users( id,username,password,fullname,birthdate,gender,
                            address,email,phone) 
        VALUES ( '','$username', '$password', '$fullname', '$birthdate',
                '$gender', '$address', '$email', '$phone')";
        return $this->executeQuery($sql);
    }

}

?>