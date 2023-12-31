@extends('client')
@section('content')
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

body{
    font-family: 'Montserrat', sans-serif;
    padding:0;
    margin:0;
    background-color: #28223f;

}

*{
    box-sizing: border-box;
}



.card{
    background-color: #231e39;
    color:#b3b8cd;
    border-radius: 5px;
    max-width: 350px;
    width:100%;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,.75);
}

.card-header{
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 160px;
    border-radius: 5px 5px 0 0;
    padding: 0 15px;
}

.card-photo{
    height: 120px;
    width:120px;
    border-radius: 50%;
    border: 1px solid #1f1a32;
    padding: 7px;
    background-color: #292343;
    overflow: hidden;
    transform: translateY(calc(50% + 40px));
}

.card-photo img{
    display: inline-block;
    max-width: 100%;
    height: auto;
    border-radius: 50%;
}

.card-body{
    padding: 0 15px 15px;
    text-align: center;
}

.card-name{
    font-size: 25px;
    font-weight: 700;
    margin: 30px 0 0 135px;
}

.card-description{
    font-size: 16px;
    line-height: 21px;
    margin-top: 35px;
}

.card-button{
    margin: 10px 0 40px;
}

.card-button button:first-of-type{
    margin-right: 10px;
}

.btn{
    display: inline-block;
    padding: 10px 25px;
    border-radius: 3px;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    transition: all .5s ease;
    cursor: pointer;
}
.btn-primary,
.btn-outline-primary{
    border:1px solid #03bfbc;
}

.btn-primary,
.btn-outline-primary:hover{
    color: #231e39;
    background-color: #03bfbc;
}

.btn-primary:hover,
.btn-outline-primary{
    background-color: transparent;
    color: #03bfbc;
}


.card-social{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    list-style: none;
}

.card-social li{
    padding-right: 20px;
    transition: all .5s ease;
}

.card-social li:last-of-type{
    padding-right: 0;
}

.card-social li a{
    font-size: 20px;
    color:#b3b8cd;
}

.card-social li a:hover{
    color: #03bfbc;
}

    </style>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
        <div>
            <div class="card">
                <div class="card-header" style="background-image: url(
                    https://images.unsplash.com/photo-1540228232483-1b64a7024923?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80);">
                    <div class="card-photo">
                        <!-- <img src="https://demos.creative-tim.com/impact-design-system-pro/docs/assets/img/team/6.jpg" alt=""> -->
                        <img src="{{ URL('dist/img/images.png') }}" class="h-8 mr-3" alt="User Logo">
                     
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="card-name"> HELLO {{ Auth::user()->name }}</h3>
        
                    <div class="card-button">
                        <button class="btn btn-primary">Massage</button>
                        <button class="btn btn-outline-primary">Following</button>
                    </div>
                    <ul class="card-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
