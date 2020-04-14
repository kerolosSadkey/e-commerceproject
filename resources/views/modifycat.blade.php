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
                    <th scope="colspan=">image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Modify</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="image/cat1.jpg" class="">
                    </td>
                    <td>
                        <div class="product-name">
                            <h2>Man</h2>
                        </div>
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
                </tr>
                <tr>
                    <td>
                        <img src="image/cat2.jpg" class="">
                    </td>
                    <td>
                        <div class="product-name">
                            <h2>Woman</h2>
                        </div>
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
                        <img src="image/cat3.png" class="">
                    </td>
                    <td>
                        <div class="product-name">
                            <h2>Kids</h2>
                        </div>
                    </td>
                    <td>
                        <div class="product-name">48</div>
                    </td>
                    <td>
                        <div class="product-name" style="vertical-align: middle">
                            <button type="button" class="btn btn-primary btn-modify">Edit</button>
                            <button type="button" class="btn btn-success btn-modify">Delete</button>
                        </div>
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
