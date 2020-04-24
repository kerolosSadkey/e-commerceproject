
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link href='https://use.fontawesome.com/releases/v5.13.0/css/all.css'>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="image/e.png">


    </head>
    <body>
        <!--  navebar  -->
        @include('navbar')


        <!--    product  -->
    <div class="super_container">

    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">


            @if(count($allproduct)  >0)


            <div class="row">
                <div class="col-md-12 text-center"> <h1 class=" deal-text">{{ $namcat }}</h1> </div>

            </div>

                            <div class="card-deck">
                                @foreach ($allproduct as $product )
                                       @if($product->quentityproduct > 0)
                               <div class="card">

                                    <div class="card-top">  <img src="{{  asset('publicimage/'. $product->imageproduct) }}" class="card-img-top" alt="..."></div>

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->nameproduct }}</h5>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <p class="card-price">
                                          price:  ${{ $product->priceproduct }}
                                        </p>
                                        <p class="card-quentity" style=" font-size:18px; color:#007bff;">
                                            found current quantity :  {{ $product->quentityproduct }} item
                                          </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="add-both-cart-button">
                                            <form action="{{ route('addcart') }}" method="POST" enctype="multipart/form-data" class="fromadd">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="idpro" value="{{ $product->idproduct }}">
                                                <button type="submit" class="btn btn-primary shop-button">Add to Cart</button>
                                            </form>


                                                <button type="button" class="btn btn-success shop-button more">more..</button>


                                        </div>
                                    </div>

                                </div>
                                    @endif
                                @endforeach



                        </div>


                     @endif
            </div>


        </div>
          <div class="details-pro">
            <div class="card-top">  <img src="" class="card-img-top" alt="..."></div>

            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <p class="card-price"></p>
                <p class="card-quentity"></p>

          </div>
          <span aria-hidden="true" id="cancle">&times;</span>

          <form action="{{ route('buyproduct') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
            <input type="hidden" name="idpro"  class="idpro">
            <div class="product_quantity"> <span>QTY: </span>
                <input id="quantity_input" type="text" pattern="[0-9]*" value="1" name="quentity">
            </div>
            <i class="fa fa-plus-circle"></i>
            <button type="submit" class="btn btn-success shop-button buy">buy</button>
        </form>
          </div>


           @if(session()->has('message'))


          <div class="details-pro masg-buy" style="display:block;">

                 <p>{{ session()->get('message') }}</p>
                 <i class="fa fa-check"></i>
          <span aria-hidden="true" id="cancle-masg">&times;</span>
          </div>
          <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
           <script>
                  $('#cancle-masg').click(function(){
                      <?php
                          session()->pull('message');
                      ?>
                  });
           </script>
           @endif
        <!--   foooter  -->

       @extends('footer')
    </div>
        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/index.js') }}"></script>

    </body>





</html>

