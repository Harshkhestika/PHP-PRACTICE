<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request.php</title>
</head>
<body>

    <!-- //method="get" hide not showing. post-> provide security get not provide -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
         //collect value of input field 
        $name = htmlspecialchars($_REQUEST['fname']);
        if(empty($name)){
            echo "Name is empty";
        }
        else{
            echo $name;
        }

    }
    ?>
</body>
</html>