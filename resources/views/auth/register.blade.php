<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="image/e.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Regist</title>
</head>
<body>

    <div class="container">
            <div class="divmid col-lg-5 col-md-8 col-sm-10">
                <div class="login-logo">
                    <img src="image/e.png">
                    <h2>Register</h2>
                </div>
                <div class="bt-back-regist">Back</div>

                <form class="px-4 py-3" action="" method="post">
                    <!--First,Last Name-->
                    <div class="form-row">
                        <div class="form-group col fname-div">
                            <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1">
                            <span class="fname-char">First Name</span>
                        </div>
                        <div class="form-group col lname-div">
                            <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1">
                            <span class="lname-char">Last Name</span>
                        </div>
                    </div>
                    <!--email-->
                    <div class="form-group email-div1">
                        <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1">
                        <span class="email-char1">Email Address</span>
                    </div>

                    <!--pass-->
                    <div class="form-group password-div1">
                        <input type="password" class="form-control password-input1" id="exampleDropdownFormPassword1">
                        <span class="password-char1">Password</span>
                        <span class="show-password1 hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password1"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--c pass-->
                    <div class="form-group password-div1-confirm">
                        <input type="password" class="form-control password-input1-confirm" id="exampleDropdownFormPassword1">
                        <span class="password-char1-confirm">Confirm Password</span>
                        <span class="show-password2 hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password2"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--Gender-->
                    <div class="form-group" >

                        <select class="form-control select-input">
                            <option value="0" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!--Date-->
                    <div class="form-group">
                        <input class="form-control date-input" type="date" name="bday">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>

                </form>
            </div>
    </div>





    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/register.js"></script>


</body>
</html>
