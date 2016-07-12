<?php

class Twitt
{
    private $id;
    private $userId;
    private $twitt;
    
    public function __construct()
    {
        $this->id = -1;
        $this->userId = "";
        $this->twitt = "";
    }
    
    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getTwitt() {
        return $this->twitt;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setTwitt($twitt) {
        $this->twitt = $twitt;
    }

        
    public static function getAllTwitts(mysqli $conn, $userId)
    {
        $query = "SELECT * FROM twitt JOIN user ON twitt.user_id = user.id WHERE user_id = '$userId'";
        
        return $result = $conn->query($query);        
    }
    
    public function create(mysqli $conn)
    {
        if ($stmt = $conn->prepare("INSERT INTO `twitt`(`user_id`, `twitt_text`) VALUES(?,?)")) {

            $stmt->bind_param('is', $this->userId, $this->twitt);

            $stmt->execute();

//            $stmt->bind_result($result);

            $stmt->close();
        }

//        return $result;
        
    }
    
    public function update()
    {
        
    }
    
    public function show()
    {
        
    }
    
}
