<?php 
    require ("functions.php");

    if(!isset($_SESSION["user"])){
        header("location: login.php");
        exit();
    }


    if(isset($_GET['logout'])){
        logoutUser();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user account</title>
</head>
<body>

    <div class="page">


        <h2>Welcome <?php echo $_SESSION["user"] ?></h2>
        <h4>This is your account </h4>



        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident corrupti cumque eos quam quae delectus fugit voluptates fugiat ex, blanditiis, beatae pariatur sapiente id dolor magni eveniet, ut ad.</p>


        <a href="?logout">Logout</a>


        <br>

        <a href="?delete-account">Delete Account</a>

    </div>



    
</body>
</html>