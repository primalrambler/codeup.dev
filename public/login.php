<?php

session_start();


function pageController()
{
    $validUser = 'guest';
    $validPassword = 'password';
    $class = 'hidden';

    $username = isset($_POST['username']) ? htmlspecialchars(strip_tags($_POST['username'])) : '';
    $password = isset($_POST['password']) ? htmlspecialchars(strip_tags($_POST['password'])) : '';


    if (!empty($_SESSION)){
        if ($_SESSION['logged_in_user']){
            header ('Location: /authorized.php');
            die;
        }
    }

    if (! empty($_POST)) {
        if ($username === $validUser && $password === $validPassword) {
            $_SESSION['logged_in_user'] = true;
            $_SESSION['username'] = $username;
            header ('Location: /authorized.php');
            die;
        } 
        elseif (! empty($_POST) && ($username !== $validUser || $password !== $validPassword)) {
            $class = 'show';
        }
    }
    return [
    'username' => $username,
    'password' => $password,
    'class' => $class,
    ];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


    <title>Login Form</title>
</head>

<body>
    <div class="alert alert-danger alert-dismissible <?= $class ?>" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> Username or password are incorrect. Try again.
    </div>

    <div class="container">
        <form class="form-horizontal" method="POST" action="/login.php">
            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Username</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Sign in</button>
            </div>
            <div class="login-register">
                <a href="/adlister.register.php">Create account</a> or <a href="reset_password.php">reset password</a>
             </div>
        </form>
    </div>



    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
<body>
</html>