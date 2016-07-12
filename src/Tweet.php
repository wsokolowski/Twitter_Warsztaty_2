<?php

class Tweet
{
    private $id;
    private $userId;
    private $tweet;
    
    public function __construct()
    {
        $this->id = -1;
        $this->userId = "";
        $this->tweet = "";
    }
    
    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getTweet() {
        return $this->tweet;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setTweet($tweet) {
        $this->tweet = $tweet;
    }

        
    public function loadFromDB(mysqli $conn)
    {
        $query = 'SELECT * FROM tweet';
        
        return $result = $conn->query($query);        
    }
    
    public function create()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function show()
    {
        
    }
    
}
