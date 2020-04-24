<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="image/e.png">
</head>
<body>
    <!--  navebar  -->
    @include('navbar')

    <!--information section-->
    <div class="information-cart">
        <div class="container">
            <h1>Cart</h1>
            <img src="image/page-info-art.png">
        </div>

    </div>

    <!--        page information    -->


    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="colspan=">Product</th>
                    <th scope="colspan=">name Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>


                @if(session()->has('cart'))
                @foreach (session()->get('cart') as $carts )

                        @foreach ($carts as $cart )


                <tr>
                    <td>
                        <img src="{{ asset('publicimage/'. $cart->imageproduct ) }}" class="float-left">
                        <div class="product-name float-left">
                            <h2>Black Shoulder Bag</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">{{ $cart->nameproduct }}</div>
                    </td>
                    <td>
                        <div class="product-name">{{  $cart->priceproduct}}</div>
                    </td>
                    <td>
                        <div class="product-name">{{ $cart->quentityproduct }}</div>
                    </td>
                </tr>
                   @endforeach
                @endforeach
           @endif
            </tbody>
        </table>
        <div style="text-align: end;">
            <a href="histroy.html">
                <button class="btn btn-secondary">show Histroy buys</button>
            </a>

        </div>
    </div>


    <!--    footer   -->

    @extends('footer');



    <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
</body>
</html>
