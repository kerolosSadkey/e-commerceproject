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
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="#">
            <img src="image/e.png" width="30" height="30" class="d-inline-block" alt="logo">
            <span class="navbar-brand mb-0 h1">-Commerce</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-ul" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="productOfCatogry.html">Man</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Woman</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Kids</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Men's jeans</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Woman's jeans</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Hats</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Shose</a>
                        <a class="dropdown-item" href="productOfCatogry.html">bags</a>
                        <a class="dropdown-item" href="productOfCatogry.html">Glasses</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#category">All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modify
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Add Category</a>
                        <a class="dropdown-item" href="#">Edit Category</a>
                        <a class="dropdown-item" href="#">Delete Category</a>
                        <a class="dropdown-item" href="#">Add Product</a>
                        <a class="dropdown-item" href="#">Edit Product</a>
                        <a class="dropdown-item" href="#">Delete Product</a>
                    </div>
                </li>
            </ul>

            <div class="cart">
                <a href="cart.html"><img src="image/bag.png" alt="">
                    <span>2</span>
                </a>
                <a href="login.html"><img src="image/login.png" class="login_img" alt="login"></a>


            </div>

            
        </div>
    </nav>

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
        
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12 footer-inf">
                    <h4>
                        E-Commerce Shows the latest models in the world
                    </h4>
                    </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h3>New Category</h3>
                    <ul>
                        <li><a href="">Hat</a></li>
                        <li><a href="">Shoses</a></li>
                        <li><a href="">Bags</a></li>
                        <li><a href="">Glasses</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>Address: Assuit University</li>
                        <li>Phone: +02 0110 987 6543</li>
                        <li>Email: ecommerce@gmail.com</li>
                    </ul>

                </div>
                    
            </div>
        </div>
    </footer>

    
    
    <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
</body>
</html>