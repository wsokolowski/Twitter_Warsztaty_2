<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter - warsztaty 2</title>
    </head>
    <body>
        <?php
            require_once 'src/functions.php';
            require_once 'src/User.php';
            require_once 'src/Tweet.php';

            $conn = connectToDatabase();
        
        ?>
        
        <div>
            <form method="POST" action="index.php">
                <label>Put your twitt here and send!</label><br>
                <input name="twitt" type="text"/><br>
                <input type="submit" name="submit" value="Post your twitt"></input>
            </form>
        </div>

    </body>
</html>








