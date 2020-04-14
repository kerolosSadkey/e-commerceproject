<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
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
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Modify</th>
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
                        <div class="product-name">7</div>
                    </td>
                    <td>
                        <div class="product-name" style="vertical-align: middle">
                            <button type="button" class="btn btn-primary btn-modify">Edit</button>
                            <button type="button" class="btn btn-success btn-modify">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="image/cat5.jpg" class="float-left">
                        <div class="product-name float-left">
                            <h2>Woman's jeans</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">25.00$</div>
                    </td>
                    <td>
                        <div class="product-name">23</div>
                    </td>
                    <td>
                        <div class="product-name" style="vertical-align: middle">
                            <button type="button" class="btn btn-primary btn-modify">Edit</button>
                            <button type="button" class="btn btn-success btn-modify">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="image/cat2.jpg" class="float-left">
                        <div class="product-name float-left">
                            <h2>woman shemees</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">125.00$</div>
                    </td>
                    <td>
                        <div class="product-name">13</div>
                    </td>
                    <td>
                        <div class="product-name" style="vertical-align: middle">
                            <button type="button" class="btn btn-primary btn-modify">Edit</button>
                            <button type="button" class="btn btn-success btn-modify">Delete</button>
                        </div>
                    </td>
                    <tr>
                        <td>
                            <img src="image/cat1.jpg" class="float-left">
                            <div class="product-name float-left">
                                <h2>T-shirt</h2>
                            </div>
                        </td>
                        <td>
                            <div class="product-name">75.00$</div>
                        </td>
                        <td>
                            <div class="product-name">30</div>
                        </td>
                        <td>
                            <div class="product-name" style="vertical-align: middle">
                                <button type="button" class="btn btn-primary btn-modify">Edit</button>
                                <button type="button" class="btn btn-success btn-modify">Delete</button>
                            </div>
                        </td>
                    </tr>
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
