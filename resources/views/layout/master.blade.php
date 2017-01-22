<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="css/yeti.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Ubuntu:300" rel="stylesheet">
</head>
<body>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <div class="container-fluid container-custom1">
          <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav navbar-right1">
                <a class="navbar-brand" href="/homepage">Home</a>
                <a class="navbar-brand" href="/portfolio">Portfolio</a>
                <a class="navbar-brand" href="/blog">Blog</a>
                <a class="navbar-brand CustomContact" href="/contact">Contact</a>
                </ul>
          </nav>
      </div>
    
@yield('content')

<footer>
    <div class="container-fluid container-footer">
          <nav class="navbar navbar-inverse navfooter">
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="/home">Home</a>
                <a class="navbar-brand" href="/">About</a>
                <a class="navbar-brand" href="/portfolio">Portfolio</a>
                <a class="navbar-brand" href="/">Blog</a>
                <a class="navbar-brand" href="/contact">Contact</a>
            </ul>
          </nav>
      </div>
</footer>
</body>
</html>
