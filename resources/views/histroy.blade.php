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
            <img src="image/page-info-art.png">
        </div>

    </div>

    <!--        page information    -->

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="colspan=">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="image/cat9.jpg" class="float-left">
                        <div class="product-name float-left">
                            <h2>Black Shoulder Bag</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">53.00$</div>
                    </td>
                    <td>
                        <div class="product-name">3</div>
                    </td>
                    <td>
                        <div class="product-name">159.00$</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="image/cat5.jpg" class="float-left">
                        <div class="product-name float-left">
                            <h2>Black Shoulder Bag</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">25.00$</div>
                    </td>
                    <td>
                        <div class="product-name">1</div>
                    </td>
                    <td>
                        <div class="product-name">25.00$</div>
                    </td>
                </tr>
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
