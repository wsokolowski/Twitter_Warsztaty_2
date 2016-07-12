<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter - login or register</title>
    </head>
    <body>
        <?php
        
        require_once 'src/functions.php';
         
        $conn = connectToDatabase();
        
        session_start();
        unset($_SESSION['user_id']);
        
        if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['ver'])){
            if ($_GET['ver']  === "0") {
                echo "Incorrect email or password";
            } elseif ($_GET['ver']  === "-1") {
                echo "This email is already registered";
            } else {
                
            }
        }
        
        ?>
        
        <div>
            <form method="POST" action="varifylogin.php">
                <label>Email</label><br>
                <input name="email" type="text"/><br>
                <label>Password</label><br>
                <input name="password" type="password"/><br>
                <br>
                <input type="submit" name="submit" value="Login"></input>
                <input type="submit" name="submit" value="Register"></input>
            </form>
        </div>
        
        
    </body>
</html>