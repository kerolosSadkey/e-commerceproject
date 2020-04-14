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
                    <a class="dropdown-item" href={{ route("productofcat") }}>Man</a>
                    <a class="dropdown-item"href={{ route("productofcat") }}>Woman</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Kids</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Men's jeans</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Woman's jeans</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Hats</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Shose</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>bags</a>
                    <a class="dropdown-item" href={{ route("productofcat") }}>Glasses</a>
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
                    <a class="dropdown-item" href="#">Modifiy Category</a>
                    <a class="dropdown-item" href="#">Add Product</a>
                    <a class="dropdown-item" href="#">Modifiy product</a>
                </div>
            </li>
        </ul>

        <div class="cart">
            <a href={{ route("cart") }}><img src="image/bag.png" alt="">
                <span>2</span>
            </a>
            <a href={{ route("login") }}><img src="image/login.png" class="login_img" alt="login"></a>


        </div>


    </div>
</nav>
