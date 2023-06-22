<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <link rel="shortcut icon" href="{{ URL('v.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     
   @include('style')
   <style>
/* Icon set - http://ionicons.com */
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
figure.snip1249 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  background: white;
  color: #ffffff;
  text-align: left;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
 
}
figure.snip1249 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
figure.snip1249 .image {
  position: relative;
}
figure.snip1249 img {
  max-width: 100%;
  vertical-align: top;
}
figure.snip1249 i {
  position: absolute;
  top: 7px;
  left: 12px;
  font-size: 32px;
  opacity: 0;
  z-index: 2;
  -webkit-transition-delay: 0;
  transition-delay: 0;
}
figure.snip1249 h3 {
  margin: 0;
  font-weight: 500;
  text-transform: uppercase;
}
figure.snip1249:before,
figure.snip1249:after {
  width: 120px;
  height: 120px;
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
  z-index: 1;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
figure.snip1249:before {
  background-color: #20638f;
  -webkit-transform: skew(-45deg) translateX(-150%);
  transform: skew(-45deg) translateX(-150%);
  border-right: 1px solid #20638f;
}
figure.snip1249:after {
  background-color: #962d22;
  -webkit-transform: skew(-45deg) translateX(-175%);
  transform: skew(-45deg) translateX(-175%);
  border-right: 1px solid #962d22;
}
figure.snip1249 figcaption {
  padding: 25px 80px 25px 25px;
  background-color: #ffffff;
  color: #000000;
  position: relative;
  font-size: 0.9em;
}
figure.snip1249 figcaption p {
  margin-bottom: 15px;
}
figure.snip1249 figcaption:before {
  width: 150px;
  height: 150px;
  position: absolute;
  bottom: 0;
  right: 0;
  content: '';
  z-index: 1;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
  background-color: #20638f;
  -webkit-transform: skew(-45deg) translateX(50%);
  transform: skew(-45deg) translateX(50%);
  border-right: 1px solid #20638f;
}
figure.snip1249 .add-to-cart {
  display: inline-block;
  width: auto;
  border: 2px solid #20638f;
  padding: 0.4em 0.6em;
  color: #20638f;
  text-decoration: none;
  font-weight: 800;
  font-size: 0.9em;
  text-transform: uppercase;
}
figure.snip1249 .add-to-cart:hover {
  background-color: #20638f;
  color: #ffffff;
}
figure.snip1249 .price {
  position: absolute;
  right: 0;
  bottom: 0;
  color: #ffffff;
  z-index: 2;
  text-transform: uppercase;
  padding: 20px;
  font-weight: 800;
  font-size: 1.2em;
  text-align: center;
}
figure.snip1249 .price s {
  display: block;
  font-size: 0.85em;
  font-weight: 400;
  opacity: 0.8;
}
figure.snip1249:hover i,
figure.snip1249.hover i {
  opacity: 0.7;
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
figure.snip1249:hover h3,
figure.snip1249.hover h3 {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 1;
}
figure.snip1249:hover:before,
figure.snip1249.hover:before {
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: skew(-45deg) translateX(-50%);
  transform: skew(-45deg) translateX(-50%);
}
figure.snip1249:hover:after,
figure.snip1249.hover:after {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
  -webkit-transform: skew(-45deg) translateX(-75%);
  transform: skew(-45deg) translateX(-75%);
}

    </style>

   
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light.bg-gradient">
        <!-- <a href="http://127.0.0.1:8000/"><img class="navbar-brand Logos" style="width:30px;hight:30px;margin-right: 18px" src="https://cdn-icons-png.flaticon.com/512/1271/1271380.png"></a>
        <button style="outline: none;box-shadow: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a  style="font-size: 18px;text-decoration: none;color:rgb(67, 142, 255)" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($cats as $cat)
                            <a class="dropdown-item" href="{{ route('cat.show', [$cat->id]) }}">{{ $cat->name }}</a>
                        @endforeach



                        {{-- <a id="default" class="dropdown-item" href="{{ route('laptops') }}">Laptops</a>
                        <a class="dropdown-item" href="{{ route('tv') }}">TV</a> --}}
                    </div>
                </li>

            </ul>
            @guest

                   {{--  <a class="navbar__buttons-login" href="{{ route('login') }}" style="text-decoration: none;text-align:center">Login</a>&nbsp;&nbsp;
                    <a class="navbar__buttons-register" href="{{ route('register') }}"
                        style="text-decoration: none;text-align:center">Register</a> --}}

                <a style="outline: none;box-shadow: none;" class="nav-link btn also" href="{{ route('login') }}">Login</a>&nbsp;
                <a style="outline: none;box-shadow: none;"  class="nav-link btn regis" href="{{ route('register') }}">Register</a>
            @else
                <a style="outline: none;box-shadow: none;"  class="nav-link btn " href="{{ route('logout') }}">Logout</a>

            @endguest
        </div>
    </nav>
    @section('content')




        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
              @foreach ($products as $product)
            <figure class="snip1249">
  <div class="image">
  <img class="p-8 rounded-t-lg" src="{{$product->image }}" alt="product image" />
  </div>
  <figcaption>
    <h3>{{ $product->name }}</h3>
    <p>{{ $product->desc }}</p>
    <div class="price">
      <s>${{$product->price}}</s>${{$product->price}}
    </div>
    <a href="{{route('addtocartguest')}}" class="btn btn-warning bold-btn">add to cart</a>
  </figcaption>
</figure>
                        @endforeach
                        
                </div>
              </div>


        @endsection


    @yield('content')
    @include('products.filtring')

    <script type="text/javascript">
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        function ctrlShiftKey(e, keyCode) {
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown = (e) => {
            // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
            if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            )
                return false;
        };
    </script>
</body>

</html>
