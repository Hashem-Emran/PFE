@extends('client')

@section('content')
@include('errors.success') @include('errors.error')
<style>
#card {
  position: relative;
  top: 110px;
  width: 320px;
  display: block;
  margin: auto;
  text-align: center;
  font-family: 'Source Sans Pro', sans-serif;
}

#upper-side {
  padding: 2em;
  background-color: #8BC34A;
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}

#checkmark {
  font-weight: lighter;
  fill: #fff;
  margin: -3.5em auto auto 20px;
}

#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}

#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: #8bc34a;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

.card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 250px;
    height: 360px;
    margin: 0 25px;
    background: #fff;
    border-radius: 15px;
    text-align: center;
    transition: 0.3s;
}
.card:hover {
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.card .imgBox {
    position: relative;
    width: 180px;
    height: 180px;
    background: red;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}
.card .imgBox img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.card .img-blur {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(5px);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: 0.5s;
}
.card .imgBox:hover .img-blur {
    opacity: 1;
}
.card .img-blur a {
    text-decoration: none;
    color: #fff;
    letter-spacing: 1px;
}
.card .img-blur::before {
    content: '';
    position: absolute;
    top: 10px;
    left: 10px;
    width: 155px;
    height: 155px;
    border-radius: 50%;
    border: 2px dotted #fff;
    pointer-events: none;
    animation: border-anime 15s linear infinite;
}
@keyframes border-anime {
    from {
        transform: rotate(0);
    } to {
        transform: rotate(360deg);
    }
}
.card .title {
    margin: 15px 0;
}
.card .title a {
    font-size: 1.6rem;
    color: #555;
    text-decoration: none;
    transition: 0.4s;
}
.card .title a:hover {
    color: rgb(0, 221, 147);
}
.card .text {
    font-size: 0.8rem;
    line-height: 1.5em;
    color: #555;
    opacity: 0.6;
}
</style>

@if(count($chariots)===0)
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
    Congratulations, your products have been successfully purchased.
    </p>
  </div>
</div>
@else
<div class="w-full sm:max-w-2xl mt-6 mb-6 px-4 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <br><br><br><br><br>

    <!-- <a href="{{route('commande',['pass'])}}" class="text-white ml-3 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Valider la commande</a> -->

    <a href="{{route ('check')}}" class="text-white ml-3 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"> Continue to Checkout</a>

    <div class="flex flex-wrap mt-4 pt-5 justify-start">
        @foreach ($chariots as $c)
        <div class="card">
    <div class="imgBox" style="    background: #b2b2b2;">
    <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ $c->image }}" alt="c image" />
                </a>
        <div class="img-blur">
            <a href="#"></a>
        </div>
    </div>
    <h2 class="title">
    <h6 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            <b>{{ $c->name }}</b></h6>
    </h2>
    <p class="text">
    {{ $c->desc }}
    </p>
    <a href="/Delete_Cart/{{$c->id}}"  class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">

      <i  style="color: red;" class="fa fa-trash"></i></a></li>
</div>

 @endforeach
    </div>
</div>
@endif

@endsection
