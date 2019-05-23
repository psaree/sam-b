<html>
    <head>
        <title>@yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css"/>
        <link href="mystyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="css/brands.css">
	<link rel="stylesheet" type="text/css" href="css/solid.css">
	<link rel="stylesheet" type="text/css" href="css/regular.css">
    </head>
    <body>
       

        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                logo will be header_register_callback
                </div>
         <div class="row">
            <div class="col-lg-12">
                @include('front.navbar')
            </div>
        </div>
     @yield('content')


     <div class="row">
            <div class="col-lg-12">
                &copy; 2019; yoursite.com, All register_shutdown_function
                Reserved.
                </div>
            </div>
        </div>

       
    </body>
    
</html>