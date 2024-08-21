<!DOCTYPE html>
<html class="noIE" lang="en-US">

	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Library</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
	    <link rel="stylesheet" href="css/main.css">



	</head>
    <style>
        .home{
            background-image: url("/images/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;


        }
    </style>
<body>
	 <section class="navigation_bar">


	</section> <!-- .navigation_bar -->
	<!-- Home -->
	<section class="home" id="home">
			<div class="container-fluid">
				 <div class="row">
					<div class="col-xs-6 col-sm-5 col-sm-offset-1">
						<div class="header-wrapper" style="color:black">

							<h1 class="header-title">Welcome to our library</h1>
                            <p class="header-sub" style="color:black ">
                                Where you are provided with all the books you want
                            </p>
							<p class="description" style="color:rgb(0, 0, 0); font-family: Arial, sans-serif;font-weight: bold; bold:20px; ">
								Our library offers you a unique online reading experience, with a wide range of books available for direct reading, with an easy-to-use interface and personalized services to enhance your experience.<br><br>
                                To start reading books, you must <span style="color:rgb(194, 103, 70)">Log in</span> first
							</p>

                        @if (Route::has('login'))

                            @auth
                                <a href="{{ route('login') }}" class="btn btn-default btn-lg red" role="button">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-default btn-lg bttn" role="button">Register</a>
                                @endif

                                @else
                                    <a href="{{ route('login') }}" class="btn btn-default btn-lg red" role="button">Log in</a>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-default btn-lg bttn" role="button">Register</a>
                                    @endif
                             @endauth

                        @endif
                    </div>
						</div> <!-- /.header-wrapper -->
					</div>	<!-- .col-sm-5 -->
				</div> <!-- .row -->
			</div> <!-- /.container-fluid -->

	</section>
