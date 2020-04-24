<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
    <link rel="stylesheet" href="{{ asset("css/cart.css") }}">
    <link rel="shortcut icon" href="{{ asset("image/e.png") }}">
</head>
<body>
    <!--  navebar  -->
    @include('navbar')
    <!--information section-->
    <div class="information-cart">
        <div class="container">
            <h1>Modify Category</h1>
            <img src="image/page-info-art.png">
        </div>

    </div>

    <!--        page information    -->

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">name category</th>
                    <th scope="col">Description</th>

                </tr>
            </thead>
            <tbody>

                @if(@isset($allcat))

                    @foreach ($allcat as $cat  )
                    <tr>
                        <td>
                            <div class="cat-name">
                                <h2>{{ $cat->namecategory }}</h2>
                            </div>
                        </td>
                        <td>
                            <div class="cat-name">{{  $cat->descriptioncat}}</div>
                        </td>
                        <td>

                            <div class="product-name" style="vertical-align: middle">


                                <a href="{{ route('editcat',$cat->idcategory ) }}" class="editclick"><button type="button" class="btn btn-primary btn-modify edit">Edit</button><a>

                            <form action="{{ route('deletecetogry') }}" method="POST" enctype="multipart/form-data" class="fromadd">
                                {{ csrf_field() }}
                                <input type="hidden" name="idcat" value="{{ $cat->idcategory }}">
                                <button type="submit" class="btn btn-success btn-modify">Delete</button>
                            </form>


                        </div>
                        </td>
                    </tr>


                    @endforeach


                  @endif


            </tbody>
        </table>
    </div>


    <!--    footer   -->
    @if(isset($onecat))
    @foreach ($onecat as  $one)


<div class="details-pro" style=" height:400px;">
 <form method="POST" action="{{ route('editcatrgory') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
 <div class="form-group">
     <label for="exampleInputPassword1"> Name cat</label>
     <input type="text" class="form-control" id="exampleInputPassword1" name="namecat" value="{{ $one->namecategory }}">
  </div>
   <div class="form-group">
      <label for="exampleInputPassword1"> Description of cat</label>
      <input type="text" class="form-control descrip" id="exampleInputPassword1" name="description" value="{{ $one->descriptioncat }}">
   </div>
   <input type="hidden" class="form-control" id="exampleInputPassword1" name="idcat" value="{{ $one->idcategory }}">
   <button type="submit" class="btn btn-primary  btn-modify sub">Edit</button>
<span aria-hidden="true" id="cancle">&times;</span>

</form>
</div>
@endforeach
@endif
    @extends('footer')



    <script src="{{ asset("js/jquery-3.4.1.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/home.js") }}"></script>
</body>
</html>
