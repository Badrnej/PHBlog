<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if(isset($_POST["submit"])) {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"]
        $password = $_POST["password"]
        $passwordRepeat = $_POST["repeat_password"];
        $errors = array();
        if(empty($fullName) ORempty($email) ORempty($password) ORempty($passwordRepeat)){
            array_push(errors,"All fields are required");
            
        }
        if(!filter_var($email, FILTER_VALIDATE)){
            array_push($errors,"Email is not valid");

        }
        if(strlen($password)< 8){

            array_push($errors, "password must be at 8 characters long ")
            
        }
        
    }
    
    ?>
</body>
</html>