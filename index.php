<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter - warsztaty 2</title>
    </head>
    <body>
        <?php
            session_start();
            require_once 'src/functions.php';
            require_once 'src/User.php';
            require_once 'src/Twitt.php';

            $conn = connectToDatabase();
            
            redirectIfNotLoggedIn();
            
            if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitTwitt'])) {
                $twitt = new Twitt;
                $twitt->setTwitt($_POST['twitt']);
                $twitt->setUserId($_SESSION['user_id']);
                
                
                $twitt->create($conn);
            }
            
        ?>
        
        <div>
            <form method="POST" action="index.php">
                <label>Put your twitt here and post it!</label><br>
                <input name="twitt" type="text"/><br>
                <input type="submit" name="submitTwitt" value="Post your twitt"></input>
            </form>
        </div>
        
        <?php
            $allTwitts = Twitt::getAllTwitts($conn, $_SESSION['user_id']);
            
            foreach ($allTwitts as $singleTwitt){
                echo "<p>".$singleTwitt['twitt_text']."</p>";
            }
                
            $conn->close();
        
        ?>
        
    </body>
</html>








