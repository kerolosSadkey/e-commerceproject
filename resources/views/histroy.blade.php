<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histroy Buys</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">

    <link rel="shortcut icon" href="image/e.png">
</head>
<body>
    <!--  navebar  -->
       @include('navbar')


    <!--information section-->
    <div class="information-cart">
        <div class="container">
            <h1>Histroy Buys</h1>
              <h2>you bought all from product</h2>
            <img src="image/page-info-art.png">
        </div>

    </div>

    <!--        page information    -->

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="colspan=">cartduct</th>
                    <th scope="colspan=">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">total price</th>
                </tr>
            </thead>
            <tbody>


                @if(!isset($allcart))
                <td>
                    <h1>not found any cartduct</h1>
                </td>

                  @endif
                 @if(isset($allcart))
                     @foreach ( $allcart as $cart )


                <tr>
                    <td>
                        <img src="{{ asset('publicimage/'. $cart->imageproduct) }}" class="float-left">
                        <div class="cartduct-name float-left">
                            <h2>{{ $cart->nameproduct }}</h2>
                        </div>
                    </td>
                    <td>
                        <div class="cartduct-name">{{ $cart->description }}</div>
                    </td>
                    <td>
                        <div class="cartduct-name">{{ $cart->priceproduct }}</div>
                    </td>
                    <td>
                        <div class="cartduct-name">{{ $cart->newquy }}</div>
                    </td>
                    <td>
                        <div class="cartduct-name">{{ $cart->total }}</div>
                    </td>
                </tr>
                       @endforeach
                  @endif

            </tbody>
        </table>
    </div>


    <!--    footer   -->

       @extends('footer')



    <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
</body>
</html>
