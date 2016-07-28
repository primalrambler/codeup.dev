<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Website CSS style -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	
	<title>Registration Form</title>

</head>

<body>
	<!-- Form  -->
    <div class="container">
            <form class="form-horizontal" method="post" action="#">
                <div class="form-group">
                    <label for="first-name" class="cols-sm-2 control-label">Your First Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="first-name" id="first-name"  placeholder="Enter your First Name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last-name" class="cols-sm-2 control-label">Your Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="last-name" id="last-name"  placeholder="Enter your Last Name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
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

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
                <div class="login-register">
                    <a href="/adlister.login.php">Login</a>
                 </div>
            </form>
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		    <!-- Latest compiled and minified JavaScript -->
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		    </script>
    </div>
    <!-- End Form -->



</body>
</html>