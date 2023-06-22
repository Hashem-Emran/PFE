@extends('client')

@section('content')
    @include('errors.success') @include('errors.error')
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
<br>



<div class="max-w-md mx-auto md:max-w-2xl">
    @include('chariot.counter')

 
</div>
    <div class="w-full sm:max-w-2xl mt-3 mb-6 px-4 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
      

        <div class="flex flex-wrap mt-4 pt-5 justify-center">
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
    <a href="{{ route('addtocart', ['pid' => $product->id, 'name' => $product->name, 'desc' => $product->desc, 'price' => $product->price, 'image' => $product->image, 'uid' => Auth::user()->id]) }}" class="add-to-cart">Add to Cart</a>
  </figcaption>
</figure>
                        @endforeach
                        
        </div>
    </div>

    
@endsection

