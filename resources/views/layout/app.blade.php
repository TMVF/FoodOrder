<!DOCTYPE html>

<html>

<head>
<title>Paradise Restaurant</title>
<link rel="icon" type="image/gif/png" href="pic.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/styles/layout.css" rel="stylesheet" type="text/css" media="all">


<!-- JAVASCRIPTS -->
<script src="js/scripts/jquery.min.js"></script>
<script src="js/scripts/check.js"></script>
<script src="js/scripts/jquery.backtotop.js"></script>
<script src="js/scripts/jquery.mobilemenu.js"></script>
</head>

<body id="top">

<!-- NAVBAR -->
<div class="bgded overlay"> 

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
   
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="/report">Report</a></li> 
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +94 113 567 880</li>
          <li><i class="fa fa-envelope-o"></i> info@Paradise.com</li>
        </ul>
      </div>
    
    </div>
  </div>


<!-- BODY -->
<div class="wrapper row3">
  <div class="hoc container clear"> 

    <!-- <div class="col-md-12">  -->
       @section('body')
        @show
  
</div>
</div>

<!-- FOOTER -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
  
    <div class="one_half first">
      <h6 class="heading">Paradise Restaurant</h6>
      <p class="btmspace-30">Restaurant And Hotel.</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +94 113 567 880</li>
        <li><i class="fa fa-envelope-o"></i> info@Paradise.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Id interdum nisl in</h6>
      <ul class="nospace linklist">
        <li><a href="#">Fermentum massa eget</a></li>
        <li><a href="#">Ipsum ut euismod arcu</a></li>
        <li><a href="#">In volutpat mattis nam</a></li>
        <li><a href="#">Diam leo placerat</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">At nulla ultrices</h6>
      <ul class="nospace linklist">
        <li><a href="#">Id diam in ultrices</a></li>
        <li><a href="#">Molestie neque nulla</a></li>
        <li><a href="#">Massa molestie efficitur</a></li>
        <li><a href="#">Eu tristique magna</a></li>
      </ul>
    </div>
 
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
  
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Paradise Restaurant</a></p>
    <p class="fl_right">Developed by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">TMVF</a></p>
   
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>



</body>
</html>