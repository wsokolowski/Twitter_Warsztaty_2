<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter - warsztaty 2</title>
    </head>
    <body>
        <?php
        
        require_once 'src/functions.php';
         
        $conn = connectToDatabase();
        redirectIfNotLoggedIn();
        
        
        
        ?>
    </body>
</html>




password_hash($_POST['password'], PASSWORD_DEFAULT);




