<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shortcut icon" href="image/e.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">

    <title>Add Catgory</title>
</head>
<body>

    <div class="container">
    <!--    sign in /**/ login -->
                    @if($errors->count() > 0)
                    <div class="alert alert-danger col-lg-5 mx-auto" role="alert">
                        @foreach ($errors->all() as $error )
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>

                        @endforeach


                    </div>
                    @endif
            <div class="divmid-login col-lg-8 col-md-8 col-sm-10 ">
                <div class="login-logo">

                    <h2> Add Catogry</h2>
                </div>


                <form method="POST" action="{{ route('addcats') }}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="form-group">
                       <label for="exampleInputPassword1"> Name Catogry</label>
                       <input type="text" class="form-control" id="exampleInputPassword1" name="namecat">
                    </div>

                    <div class="form-group">
                       <label for="exampleFormControlFile1">description</label>
                       <input type="text" class="form-control-file" id="exampleFormControlFile1" name="descriptioncat">
                     </div>

                     <button type="submit" class="btn btn-primary">ADD</button>
                 </form>

            </div>

    </div>

    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/register.js"></script>


</body>
</html>
