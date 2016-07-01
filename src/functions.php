<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'coderslab';
const DB_NAME = 'twitter';

function connectToDatabase() 
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (!$conn) {
        die('Unable to connect to database: ' . $conn->connect_error);
    }
    return $conn;
}


function redirectIfNotLoggedIn() 
{
    if(!isset($_SESSION['userid'])) {
        header('Location: login.php');
    }
}


