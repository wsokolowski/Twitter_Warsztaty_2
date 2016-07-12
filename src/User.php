<?php

class User
{
    private $id;
    private $email;
    private $hashedPassword;
    private $description;
    private $isActive;
    
    public function __construct()
    {
        $this->id = -1;
        $this->email = "";
        $this->hashedPassword = "";
        $this->description = "";
        $this->isActive = false;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function getHashedPassword() 
    {
        return $this->hashedPassword;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function isUserActive() 
    {
        return $this->isActive;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function setPassword($password) 
    {
        $this->hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function activate()
    {
        $this->isActive = true;
    }
    
    public function deactivate()
    {
        $this->isActive = false;
    } 
    
    public function varifyPassword($password) 
    {
        return password_verify($password, $this->hashedPassword);
    }

    public static function getAllUsers(mysqli $conn) //mysqli to nazwa klasy, dzieki temu nie bedziemy mogli tam wstawic obiektu innej klasy
    {
        $query = "SELECT * FROM `user`";
        
        return $result = $conn->query($query);
    }
    
    public function loadAllTwitts($userId)
    {
        
    }
    
    public function registerUser(mysqli $conn)
    {
        $query = "INSERT INTO `user`(`email`, `hashed_password`) VALUES('$this->email', '$this->hashedPassword')";
        
        return $result = $conn->query($query);
    }
    
    
    
    
}
