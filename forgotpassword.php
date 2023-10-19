<?php
require "functions.php";

if (isset($_POST['submit'])) {
    $response = passwordReset($_POST['email']);
}



include 'nav.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password?</title>
</head>

<body>
    <form class="mt-48 text-center" action="" method="post" autocomplete="off">

        <h2 class="text-2xl text-blue-400 mb-8 font-bold">Password Reset</h2>
        <h4 class="text-xl text-blue-500 mb-8 font-bold">Please enter your email so we can send a new password.</h4>

        <div>
            <label class="text-xl text-blue-500 mb-8 font-bold mx-8" for="email">Email</label>
            <input class="text-xl text-blue-500 mb-8 font-bold w-1/2 text-center" type="text" name="email" value="<?php echo @$_POST['email']; ?>">
        </div>


        <button class="text-xl text-blue-500 mb-8 font-bold" type="submit" name="submit">Submit</button>

        <p>
            <a class="text-xl text-blue-500 mb-8 font-bold underline" href="login.php">Back to login page</a>
        </p>





        <?php
        if (@$response == "success") {
        ?>
            <p class="success">Please Check your email account for your new password</p>

        <?php



        } else {
        ?>
            <p class="error"><?php echo @$response; ?></p>

        <?php
        }

        ?>


    </form>

    <div class="mt-48">

    </div>


    <?php
    include 'footer.php';
    ?>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>