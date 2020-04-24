<nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="#">
        <img src="{{  asset('image/e.png') }}" width="30" height="30" class="d-inline-block" alt="logo">
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
                @php
                   use App\category;
                 $namecat = category::all('namecategory');
                @endphp

                @if(count($namecat)>0 )

                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($namecat as $cat )
                    <a class="dropdown-item" href={{ route("allproduct", $cat->namecategory) }}>{{ $cat->namecategory }} </a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                   </div>


                @endif
            </li>

            <li class="nav-item dropdown">
                @if(!Auth::guest() && auth()->user()->role =='Admin')
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Modify
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('addc') }}">Add Category</a>
                    <a class="dropdown-item" href="{{ route('allcat') }}">Modifiy Category</a>
                    <a class="dropdown-item" href="{{ route('addp') }}">Add Product</a>
                    <a class="dropdown-item" href="{{ route('modify') }}">Modifiy product</a>
                </div>
                @endif
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('allcart') }}">History</a>
            </li>
        </ul>

        <div class="cart">
            <a href="{{ route('cart') }}"><img src="{{  asset('image/bag.png') }}" alt="">
                <span>2</span>
            </a>
            @if(Auth::guest())
            <a href={{ route("login") }}><img src="{{  asset('image/login.png') }}" class="login_img" alt="login"></a>
            @endif
            @if(!Auth::guest())
            <a href={{ URL('logout') }} class="logout">Logout</a>
             @endif
        </div>


    </div>
</nav>
