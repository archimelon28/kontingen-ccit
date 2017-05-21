<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Kontingen</title>
<link href="<?php echo base_url()?>assets/frontend/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url()?>assets/frontend/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/lightbox.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Greenery Responsive Web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web template, 
  Smartphone Compatible Web template, free Webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola Web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url()?>assets/frontend/js/jquery-1.11.1.min.js"></script> 
   <script src="<?php echo base_url()?>/frontend/js/bootstrap.js"></script>
<!-- //js -->
<!-- banner-text Slider starts Here -->
    <script src="<?php echo base_url()?>assets/frontend/js/responsiveslides.min.js"></script>
     <script>
      // You can also use "$(window).load(function() {"
        $(function () {
        // Slideshow 3
          $("#slider3").responsiveSlides({
          auto: true,
          pager:true,
          nav:true,
          speed: 500,
          namespace: "callbacks",
          before: function () {
          $('.events').append("<li>before event fired.</li>");
          },
          after: function () {
            $('.events').append("<li>after event fired.</li>");
          }
        });  
      });
    </script>
    <!--//End-slider-script -->
<!-- animation-effect -->
<link href="<?php echo base_url()?>assets/frontend/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo base_url()?>assets/frontend/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!--header-->
  <div class="header">
  </div>
<!--//header-->
<!--navigation-->
    <div class="top-nav">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h1><a class="navbar-brand animated wow fadeInLeft" data-wow-delay=".5s" href="index.html">Kontingen</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left animated wow fadeInRight" data-wow-delay=".5s">
              <li class="active"><a href="<?php echo base_url()?>utama/ubahdata">Login</a></li>
            </ul>  
                  <form class="navbar-form navbar-right" action="#" method="post">
                <div class="form-group">
              
                  <input type="text" class="form-control" placeholder="Search">
                  <button type="submit" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
                
                </div>
              </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>  
      </div>      
    </div>  
<!--navigation-->
<!--content of web with codeigniter-->
<?php echo $contents; ?> //ini adalah bagian untuk isi content web kita, sehingga dinamis.
<!--end content of web with codeigniter-->
<!--footer-->
<div class="footer">
  <div class="container">
    <div class="footer-main">
        <div class="col-md-3 ftr-grid animated wow fadeInLeft" data-wow-delay=".5s">
          <h3>About</h3>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>
        </div>
        <div class="col-md-3 ftr-grid animated wow fadeInDown animated" data-wow-delay=".5s">
          <h3>Plants</h3>
          <ul>
            <li><a href="singlepage.html">Qui blanditiis praesentium</a></li>
            <li><a href="singlepage.html">Accusam dignissimos ducimu</a></li>
            <li><a href="singlepage.html">deleniti atque  molestias.</a></li>
            <li><a href="singlepage.html">voluptatum deleniti atque.</a></li>
          </ul>
        </div>
        <div class="col-md-3 ftr-grid animated wow fadeInUp animated" data-wow-delay=".5s">
          <h3>Flickr Posts</h3>
          <div class="footer-grd">
          
            <a href="singlepage.html">
            
              <img src="images/fl1.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="footer-grd">
            <a href="singlepage.html">
              <img src="images/fl2.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="footer-grd">
            <a href="singlepage.html">
              <img src="images/fl3.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="clearfix"> </div>
          <div class="footer-grd">
            <a href="singlepage.html">
              <img src="images/fl4.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="footer-grd">
            <a href="singlepage.html">
              <img src="images/fl5.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="footer-grd">
            <a href="singlepage.html">
              <img src="images/fl6.jpg" class="img-responsive" alt=" ">
            </a>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 ftr-grid animated wow fadeInRight" data-wow-delay=".5s">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Skype</a></li>
          </ul>
        </div>
      <div class="clearfix"> </div>
    </div>
    <div class="copy-right">
         <p class="animated wow fadeInRight" data-wow-delay=".5s">© 2016 Greenery . All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
        <div class="copy-rights animated wow fadeInLeft" data-wow-delay=".5s">
            <ul>
              <li><a href="#"><span class="fa"> </span></a></li>
              <li><a href="#"><span class="tw"> </span></a></li>
              <li><a href="#"><span class="g"> </span></a></li>
            </ul>
            <div class="clearfix"></div>
         </div>
      </div>
  </div>
</div>
<!--footer-->
</body>
</html>