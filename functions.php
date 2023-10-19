<?php 

    require "config.php";



    function connect(){
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if($mysqli->connect_errno != 0){
            $error = $mysqli->connect_error;
            $error_date = date("F j, Y, g:i a");
            $message = "{error} | {$error_date} \r\n";
            file_put_contents("db-log.txt", $message, FILE_APPEND);
            return false;
        }else{
            return $mysqli;
        }
    }

    function registerUser($email, $username, $password, $confirm_password){
         $mysqli = connect();
         $args = func_get_args();

         $args = array_map(function($value){
            return trim($value);
         }, $args);

         foreach ($args as $value) {
            if(empty($value)){
                return "All fields are required";
            }
         }

         foreach ($args as $value) {
            if(preg_match("/([<|>])/", $value)){
                return "<> characters are not allowed";
            }
         }

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "Email is not valid";
         }

         $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
         $data = $result->fetch_assoc();
         if ($data != NULL){
            return "Email already exists, please use a different email";
         }

         if(strlen($username) > 50){
            return "username is too long";
         }

         $stmt = $mysqli->prepare("SELECT username FROM users WHERE username = ?");
         $stmt->bind_param("s", $username);
         $stmt->execute();
         $result = $stmt->get_result();
         $data = $result->fetch_assoc();
         if ($data != NULL){
            return "username already exists, please use a different username";
         }


         if(strlen($password) > 50){
            return "password is too long";
         }

         if($password != $confirm_password){
            return "password don't match";
         }

         $hashed_password = password_hash($password, PASSWORD_DEFAULT);

         $stmt = $mysqli->prepare("INSERT INTO users(username,password,email) VALUES(?,?,?)");
         $stmt->bind_param("sss", $username, $hashed_password, $email);
         $stmt->execute();
         if($stmt->affected_rows != 1){
            return "An error occured. please try again";
         }else{
            return "success";
         }



    }

    function loginUser($username, $password){
        $mysqli = connect();
        $username = trim($username);
        $password = trim($password);

        if ($username == "" || $password == ""){
            return "both fields are required";
        }

        $username = filter_var( htmlspecialchars($username));
        $password = filter_var( htmlspecialchars($password));


        $sql = "SELECT username, password FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if($data == NULL){
            return "wrong username or password try again";
        }

        if (password_verify($password, $data["password"]) == FALSE){
            return "wrong username or password";
        }else{
            $_SESSION["user"] = $username;
            header("location:booking.php");
            exit();
        }
    }


    function logoutUser(){
        session_destroy();
        header("location: login.php");
        exit();
    }


    function passwordReset($email){

        $mysqli = connect();
        $email = trim($email);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "email not valid";
        }

        $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();


        if($data == NULL){
            return "Email doesn't exist in the database";
        }

        $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $password_length = 7;
        $shuffled_str = str_shuffle($str);
        $new_pass = substr($shuffled_str, 0, $password_length);


        $subject = "password recovery";
        $body = "You can log in with your new password". "\r\n";
        $body .= $new_pass;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: root \r\n";


        $send = mail($email, $subject, $body, $headers);
        if($send == FALSE){
            return "Email not sent. Please try again";
        }else{
            $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

            $stmt = $mysqli->prepare("UPDATE users SET password = ? WHERE email = ?");
            $stmt->bind_param("ss", $hashed_password, $email);
            $stmt->execute();

            if($stmt->affected_rows != 1){
                return "there was a connection error, try again";
            }else{
                return "success";
            }
        
        }


    }


    function deleteAccount(){
        $mysqli = connect();

        $sql = "DELETE FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $_SESSION['user']);
        $stmt->execute();


        if($stmt->affected_rows != 1){
            return "An error occured. Try again";
        }else{
            session_destroy();
            header("location: login.php");
            exit();
        }
    }



    




    function saveBooking(){
        
    }

?>