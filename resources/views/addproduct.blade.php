<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shortcut icon" href="image/e.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Add product</title>
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
            <div class="divmid-login col-lg-9 col-md-8 col-sm-10 ">
                <div class="login-logo">

                    <h2> Add Prodrct</h2>
                </div>


                <form method="POST" action="{{ route('addproducts') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                       <label for="exampleInputPassword1"> Name product</label>
                       <input type="text" class="form-control" id="exampleInputPassword1" name="nameproduct">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Catogry Of product</label>
                         <select class="form-control" name="catproduct">
                                  @if(@isset($allcat))

                                      @foreach ($allcat as $cat )
                                            <option>{{ $cat->namecategory }}</option>
                                      @endforeach


                                  @endif
                         </select>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1"> Description of product</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                     </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Quentity product</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="quentityproduct">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1"> price product</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="priceproduct">
                     </div>

                    <div class="form-group">
                       <label for="exampleFormControlFile1">Image</label>
                       <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgproduct">
                     </div>

                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>

            </div>

    </div>

    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/register.js"></script>


</body>
</html>
