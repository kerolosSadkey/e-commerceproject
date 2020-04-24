<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="shortcut icon" href="image/e.png">
</head>
<body>
    <!--  navebar  -->
    @include('navbar')

    <!--        page information    -->

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="colspan=">Product</th>
                    <th scope="colspan=">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Modify</th>
                </tr>
            </thead>
            <tbody>


                @if(!isset($allpro))
                <td>
                    <h1>not found any product</h1>
                </td>

                  @endif
                 @if(isset($allpro))
                     @foreach ( $allpro as $pro )


                <tr>
                    <td>
                        <img src="{{ asset('publicimage/'. $pro->imageproduct) }}" class="float-left">
                        <div class="product-name float-left">
                            <h2>{{ $pro->nameproduct }}</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">{{ $pro->description }}</div>
                    </td>
                    <td>
                        <div class="product-name">{{ $pro->priceproduct }}</div>
                    </td>
                    <td>
                        <div class="product-name">{{ $pro->quentityproduct }}</div>
                    </td>
                    <td>
                        <div class="product-name" style="vertical-align: middle">


                                <a href="{{ route('editpro', $pro->idproduct ) }}" class="editclick"><button type="button" class="btn btn-primary btn-modify ">Edit</button><a>

                            <form action="{{ route('deletproducts') }}" method="POST" enctype="multipart/form-data" class="fromadd">
                                {{ csrf_field() }}
                                <input type="hidden" name="idpro" value="{{ $pro->idproduct }}">
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

    @if(isset($onepro))
           @foreach ($onepro as  $one)


    <div class="details-pro">
        <form method="POST" action="{{ route('editproducts') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputPassword1"> Name product</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nameproduct" value="{{ $one->nameproduct }}">
         </div>
          <div class="form-group">
             <label for="exampleInputPassword1"> Description of product</label>
             <input type="text" class="form-control descrip" id="exampleInputPassword1" name="description" value="{{ $one->description }}">
          </div>
         <div class="form-group">
             <label for="exampleInputPassword1"> Quentity product</label>
             <input type="text" class="form-control" id="exampleInputPassword1" name="quentityproduct" value="{{ $one->quentityproduct }}">
          </div>
          <div class="form-group">
             <label for="exampleInputPassword1"> price product</label>
             <input type="text" class="form-control" id="exampleInputPassword1" name="priceproduct" value="{{ $one->priceproduct }}">
          </div>
          <input type="hidden" class="form-control" id="exampleInputPassword1" name="idproduct" value="{{ $one->idproduct }}">
          <button type="submit" class="btn btn-primary  btn-modify sub">Edit</button>
      <span aria-hidden="true" id="cancle">&times;</span>

    </form>
      </div>
      @endforeach
      @endif
    <!--    footer   -->

   @extends('footer')



    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
