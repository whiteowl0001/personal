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
                        <a href="/"><img src="/images/LW_logo.jpg" width="250px" height="auto"></a>
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
                                        <li><a href="/">HOME</a></li>
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
                                        <li><a href="newsletter">NEWS LETTER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>   
       </div>
    </div>
                                                                 <!---Footer---->
@yield('content')
       
</body>
</html>