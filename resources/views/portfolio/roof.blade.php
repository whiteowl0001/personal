<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="{{URL::asset(css/bootstrap/bootstrap.min.css)}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link type="text/css" href="{{URL::asset(css/bootstrap/stylish-portfolio.css)}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset(font-awesome/css/font-awesome.min.css)}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="container-fluid navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a href="#">
                    <img  src="img/roof/logogen.png">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li class="page-scroll">
                         <div class="btn-group open">
                            <a class="btn btn-primary" href="/mybiz">About</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                            </a>
                        </div>
                    </li>
                     <li class="page-scroll">
                         <div class="btn-group open">
                            <a class="btn btn-primary" href="#">Services</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                            </a>
                        </div>
                    </li>
                     <li class="page-scroll">
                         <div class="btn-group open">
                            <a class="btn btn-primary" href="#">Contact</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                            </a>
                        </div>
                    </li>
                    <li class="page-scroll">
                       <div class="btn-group open">
                            <a class="btn btn-primary" href="#">User</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                                <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                                <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Roofing</h1>
            <p>Call us today to learn more and see all that we have to offer.</p>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

  <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>We are waiting to answer your questions!</h3>
                    <a href="#" class="btn btn-lg btn-light">Contact Us Now!</a>
                </div>
            </div>
        </div>
    </aside>
    
    
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
               <div class="row text-center">
                       <div class="col-md-4 col-md-6">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/roof/ShinglesBox.jpg">
                            </a>
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                <i class="fa fa-home fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Roofing</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6">
                             <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/SidingBox.jpg">
                                </a>
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                <i class="fa fa-wrench fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Repair</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/MetalBox.jpg">
                                </a>
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Metal Fabrication</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                       
                </div>
            </div>
            <!-- /.row -->s
        <!-- /.container -->
    </section>
<!--
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2 "></i>
                                <i class="fa fa-home fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Roofing</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                <i class="fa fa-wrench fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Repair</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2 "></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Metal Fabrication</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x icon-background2 "></i>
                                <i class="fa fa-paint-brush fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Coating</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

  
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/ShinglesBox.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/MetalBox.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/SidingBox.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/roof/WindowsBox.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>We are waiting to answer your questions!</h3>
                    <a href="#" class="btn btn-lg btn-light">Contact Us Now!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Company Name</strong>
                    </h4>
                    <p>Address
                        <br>City, State, Zip</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>(202)-555-0106</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">youremail@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>