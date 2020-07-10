<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
		
		<link href="{{ asset('css/css.css') }}" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="stylesheet">

		<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

<!--                 <table class="table table-hover">
					@foreach($routedetails as $routedetail)
					<tr>
					<th>hostname</th>
					<th>sapid</th>
                   <th>mac_address</th>
				   <th>loopback</th>
</tr>
<tr>
<td>{{ $routedetail->hostname }}</td>
<td>{{ $routedetail->sapid	}}</td>
<td>{{ $routedetail->mac_address }}</td>
<td>{{ $routedetail->loopback  }}</td>

</tr>
@endforeach-->
<div class="topnav">
  <input type="text" placeholder="Search..">
</div>
 <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">hostname</th>
            <th scope="col">sapid</th>
            <th scope="col">mac_address</th>
            <th scope="col">loopback</th>
        </tr>
        </thead>
        <tbody>
        @foreach($routedetails as $routedetail)
            <tr>
                <th>{{$routedetail->id}}</th>
                <td>{{$routedetail->hostname}}</td>
                <td>{{$routedetail->sapid}}</td>
                <td>{{$routedetail->mac_address}}</td>
                <td>{{$routedetail->loopback }}</td>
            </tr>
        @endforeach
<table>

            </div>
        </div>
    </body>
</html>
