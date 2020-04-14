<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shortcut icon" href="image/e.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
    <!--    sign in /**/ login -->
            <div class="divmid-login col-lg-5 col-md-8 col-sm-10">
                <div class="login-logo">
                    <img src="image/e.png">
                    <h2>Login</h2>
                </div>

                <div class="bt-back">Back</div>
                <form class="px-4 py-3" action="" method="post">
                    <!--email-->
                    <div class="form-group email-div">
                        <input type="email" class="form-control email-input" id="exampleDropdownFormEmail1">
                        <span class="email-char">Email</span>
                    </div>
                    <!-- password -->
                    <div class="form-group password-div">
                        <input type="password" class="form-control password-input" id="exampleDropdownFormPassword1">
                        <span class="password-char">Password</span>
                        <span class="show-password hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <button type="submit" class="btn btn-primary bt">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                Don’t have an account?
                <a href="regist.html" class="bt-sign-up">Sign up</a>
            </div>

    </div>

    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/register.js"></script>


</body>
</html>
