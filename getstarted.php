<?php

require "functions.php";
if (isset($_POST['submit'])) {
    $response = registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm_password']);
}



include 'nav.php';
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        .highlighted-text {
            color: #7794fb;
        }

        .btn {
            padding: 1.5rem 3rem;
            font-size: 1.3rem;
            background: #7794fb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #829bf5;
        }

        .closeForm {
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 2rem;
            background: none;
            border: 0;
            cursor: pointer;
        }

        /* form */
        .login-form {
            background: rgba(0, 0, 0, 0.4);
            width: 100%;
            height: 100vh;
            /*position: absolute;*/
            left: 0;
            right: 0;
            /*top: -200%;*/
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form.active {
            transition: all 0.5s ease;
            top: 0;
        }

        .form {
            background: white;
            padding: 2rem;
            width: 400px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #808080;
        }

        input {
            padding: 1rem;
            margin-bottom: 1rem;
            width: 100%;
            border: 2px solid #808080;
        }

        .btns {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="login-form">
            <form class="form" action="" method="post" autocomplete="off">
                <h1>Login Form</h1>
                <button class="closeForm">x</button>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo @$_POST['email'];  ?>" />
                </div>
                <div class="form-group">
                    <label for="password">Username</label>
                    <input type="text" name="username" id="password" value="<?php echo @$_POST['username'];  ?>" />
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" id="email" name="password" value="<?php echo @$_POST['password'];  ?>" />
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" id="password" name="confirm_password" value="<?php echo @$_POST['confirm_password'];  ?>" />
                </div>


                <div class="btns">
                    <button type="submit" name="submit" class="btn">Sign Up</button>

                    <a href="login.php">
                        <p>
                            already have an account? <span class="highlighted-text"> Login! </span>
                        </p>
                    </a>


                </div>

                <?php
                if (@$response == "success") {
                ?>
                    <p class="success">Your Registration was successful</p>

                <?php

                } else {
                ?>

                    <p class="error"><?php echo @$response; ?></p>

                <?php
                }



                ?>



            </form>
        </div>

        <!-- <button class="btn" id="login">Sign Up</button> -->
    </div>




    <script>
        const closeForm = document.querySelector(".closeForm");
        const formContainer = document.querySelector(".login-form");
        /*const loginBtn = document.getElementById("login");

        loginBtn.addEventListener("click", (e) => {
            formContainer.classList.toggle("active");
        }); */

        closeForm.addEventListener("click", (e) => {
            e.preventDefault();
            formContainer.classList.toggle("active");
        });
    </script>

</body>

</html>