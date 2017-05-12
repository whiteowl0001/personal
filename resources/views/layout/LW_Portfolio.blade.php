<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/01c0eac664.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css_lonewolf/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="css/css_lonewolf/LW_portfolio.css">
</head>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
    <div class="container-fluid containercustom">  
                                            <!----Top Logo Bar---->
       <div class="container">
           <div class="row">
                <a href="/"><img src="/images/LWImages/LW_logo.jpg" class="img-responsive"></a>
           </div>
       </div>
                                            <!----Navigation Bar---->
            <nav class="navbar navbar-default navcustom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse navHeaderCollapse">
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
                                        <li><a href="webcrawler">Web Crawler</a></li>
                                        <li><a href="bigsky">Big Sky</a></li>
                                         <li><a href="personal">Personal</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>   
       </div>
                                                  <!---Footer---->
@yield('content')
       
</body>
</html>
