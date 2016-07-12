<?php

require_once 'src/functions.php';
require_once 'src/User.php';
require_once 'src/Tweet.php';

$conn = connectToDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    switch($_POST['submit']){
        case 'Login':
            if(isset($_POST['email']) && isset($_POST['password'])) {

                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                
                $allUsers = User::getAllUsers($conn);
                
                foreach ($allUsers as $users) {
                    if ($users['email'] === $user->getEmail() && password_verify($_POST['password'], $users['hashed_password'])) {
                        header('Location: index.php');
                    }else {
                        header('Location: login.php?ver=0');
                    }
                }
            }
        break;
        case 'Register':
            if(isset($_POST['email']) && isset($_POST['password'])) {
                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                
                $allUsers = User::getAllUsers($conn);
                
                foreach ($allUsers as $users) {
                    if ($users['email'] === $user->getEmail()) {
                        header('Location: login.php?ver=-1');
                    } else {
                        $user->activate;
                
                        $user->registerUser($conn);
                        header('Location: index.php');  
                    }
                }
                
            } else {
                header('Location: login.php?ver=-1');
            }
        break;
    }
}

