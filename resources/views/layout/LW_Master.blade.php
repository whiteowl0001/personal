<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/01c0eac664.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css_lonewolf/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="css/css_lonewolf/LW_ccustom.css">
</head>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <div class="container-fluid containercustom">  
                                            <!----Top Logo Bar---->
    <div class="container-fluid">
            <nav class="navbar navbar-default navcustom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="/lwhome"><img src="/images/LW_logo.jpg" width="250px" height="auto"></a>
                        <!--
                        <ul class="customcenter">
                        <img class="brand" src="/images/centerlogo.jpg" width="100px" height="auto">
                        <img src="/images/lone-wolf-harley-davidson-tagline.jpg" width="250px" height="auto">
                        </ul> -->
                        <ul class="customfloat">
                        <img src="/images/LW_address.jpg" width="250px" height="auto">
                        <img src="/images/LW_harly.png" width="110px" height="auto">
                        </ul>
                    </div>
                </div>
            </nav>   
                                            <!----Navigation Bar---->
            <nav class="navbar navbar-default navcustom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="collapse navbar-collapse" >
                            <ul class="nav navbar-nav ">
                                        <li><a href="/lwhome">HOME</a></li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button navcustom" aria-expanded="false">MOTORCYCLE <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropcustom" role="menu">
                                        <li><a class="dropdowntext" href="#">Current New Inventory</a></li>
                                        <li class="dasheddivider"></li>
                                        <li><a href="preowned">Pre-Owned Inventory</a></li>
                                        <li class="dasheddivider"></li>
                                        <li><a href="#">Financing</a></li>
                                    </ul>
                                </li>
                                        <li><a href="#">ABOUT</a></li>
                                        <li><a href="#">PHOTO</a></li>
                                        <li><a href="/lwnewsletter">NEWS LETTER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>   
       </div>
    </div>
                                                                 <!---Footer---->
@yield('content')
    <footer>
        <div class="container-fluid footermain">
            <ul class=" col-md-2  dashright">
				<li class="uppercase  orange">QUICK LINKS</li>
					<div class="white">
					<li><a href="#">Service Department</a></li>
					<li><a href="#">Parts Department</a></li>
					<li><a href="#">Events Calendar</a></li>
					<li><a href="#">Financing</a></li>		
					<li><a href="#">Test Ride</a></li>
					</div>
			</ul>
			<ul class="col-md-3  dashright">
					<li class="uppercase orange">LONE WOLF H-D</li>
					<div class="white">
					<li><a href="#">19011 E Cataldo Ave</a></li>
					<li><a href="#">Spokane Valley, WA 99016</a></li>
					<li class="orange">Phone:<a>(509)-927-7433</a></li>		
					<li class="orange">Fax:<a>(509)-927-3306</a></li>
					<li class="uppercase orange">Map & Hours</li>
					</div>
			</ul>
			<ul class="col-md-2  dashright">
					<li class="uppercase orange">FIND A BIKE</li>
					<div class="white">
					<li><a href="#">New Inventory</a></li>
					<li><a href="#">Pre-Owned</a></li>
					<li><a href="#">Financing</a></li>		
					<li><a href="#">Get A Quote</a></li>
					<a></a>
					</div>
			</ul>
    </div>
    </footer>
</body>
</html>