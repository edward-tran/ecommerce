<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MUJI</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!--<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg" style="background-color: whitesmoke;">
        <div class="container">
          <a class="navbar-brand" href="/" style="color: black;"><h2 style="color: black;" >MUJI 無印良品</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/" style="color: black;">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html" style="color: black;">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html" style="color: black;" >About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html" style="color: black;">Contact Us</a>
              </li>
              <li class="nav-item">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}" style="color: black;"><i class="fas fa-shopping-cart"> Cart [{{$count}}]</i></a>
                    </li>
                    <x-app-layout>
                    </x-app-layout>
                    @else
                        <li> <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: black;" >Log in</a> </li>
                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: black;" >Register</a></li>
                        @endif
                    @endauth
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div style="padding-top: 120px;" align="center">
        @if (session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class='close' data-dismiss="alert"></button>
                {{session()->get('message')}}
            </div>
        @endif
        <form action="{{url('order')}}" method="POST">
                @csrf
        <table style="background-color: whitesmoke; text-align:center; border: 3px solid black;">
            <tr style="background-color: whitesmoke; border: 1px solid black;">
                <td style="padding-right: 50px; font-size:30px; border: 1px solid black;">Product Name</td>
                <td style="padding-right: 50px; font-size:30px; border: 1px solid black; ">Quantity</td>
                <td style="font-size:30px; padding-right:30px; border: 1px solid black;">Price</td>
                <td style="font-size:30px; padding-right:30px;">Action</td>
            </tr>
                @foreach ($cart as $c)
                <tr>
                    <td style="padding-right: 50px; border: 1px solid black;">
                        <input type="text" name="product_name[]" value="{{$c->product_title}}" hidden="">{{$c->product_title}}
                    </td>
                    <td style="padding-right: 50px; border: 1px solid black;">
                        <input type="text" name="quantity[]" value="{{$c->quantity}}" hidden="">{{$c->quantity}}
                    </td>
                    <td style="border: 1px solid black;">
                        <input type="text" name="price[]" value="{{$c->price}}" hidden="">{{$c->price}}
                    </td>
                    <td style="border: 1px solid black;">
                        <a href="{{url('deletecart', $c->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
        </table>
        <div style="padding-top: 50px;">
          <button class="btn btn-success">Comfirm Order</button>
        </div>
        </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
