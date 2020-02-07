<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

       <link rel="stylesheet" href="{{asset ('frontend/css/frontend.css')}}">
       <link rel="stylesheet" href="{{asset ('backend/plugins/fontawesome-free/css/all.min.css')}}">
    </head>
    <body>
                <nav class="navbar navbar-expand-sm bg-primary navbar-light ">
                    <a class="navbar-brand"><span class="navbar-text" style="font-family:cursive; font-size:30px; font-weight:bolder;">News Blog</span></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapse_target">
                        
                         <div class="container nav-justified ">
                        <ul class="navbar-nav" >
                            <li class="nav-item" style="text-align:justify;">
                            <a href="{{url('/')}}" class="nav-link text-body">Home</a>
                            </li>
                            <li class="nav-item" style="text-align:justify;">
                                @if(Auth::check())
                                 <a href="{!! url('/admin') !!}" class="nav-link text-body">Admin Dashboard</a>
                                 @else
                            <a href="{{url('currency')}}" class="nav-link text-body">Currency</a>
                                 @endif
                             </li>
                             <li class="nav-item" style="text-align:justify;">
                             <a href="{{url('about')}}" class="nav-link text-body">About Us</a>
                             </li>
                             
                             <li class="nav-item dropdown" style="text-align:justify;">
                                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_taget">
                                         Auth
                                     </a>
                                     <div class="dropdown-menu" aria-labelledby="dropdown_target">
                                         @if(Auth::check())
                                     <a class="dropdown-item" href="{{url('logout')}}">Logout</a>  
                                         @else
                                     <a class="dropdown-item" href="{{url('login')}}">Login</a>
                                         
                                         <a class="dropdown-item" href="{{url('register')}}">Register</a>  
                                         @endif
                                    
                                      </div>
                                     
                             </li>
                        </ul>
                    </div>
                    </div>
                    </nav>
                    <div class="jumbotron">
                            <h1 class="title">News Blog</h1>
                    </div>
               
        
        @yield('content')
        <div class="footer">
                
              <div class="mx-auto " style="width:300px">
                <a href="#"><i class="fab fa-facebook-square" style="font-size:50px;"></i></a>
                <a href="#" class="font-color:blue"><i class="fab fa-twitter-square " style="font-size:50px;"></i></a>
                <a href="#" class="font-color:blue"><i class="fab fa-google-plus-square " style="font-size:50px;"></i></a>
                <a href="#" class="font-color:blue"><i class="fab fa-instagram " style="font-size:50px;"></i></a>
              </div>
              <div class="float-right">
                  Powered by <strong style="font-family:cursive;">News Blog</strong>
              </div>
        </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
