<!DOCTYPE html>
<meta charset="UTF-8">


<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta name="viewport" content="width = 1050, user-scalable = no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    
    
    <link rel="stylesheet" type="text/css"  src="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/basic.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Slabo+27px" rel="stylesheet">



<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
	<link rel="manifest" href="img/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">




</head>

<!-- PRELOADER -->
	<div id="st-preloader"><div id="pre-status"><div class="preload-placeholder"></div></div></div>
<!-- /PRELOADER -->

	
<!-- HEADER -->
 	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><img src="img/logos/pwd_dark.png" style="width:180px; position: absolute" alt="PWD Developments"></a>
				</div>
				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right" >
						<li class="number" id="social" style color="#034275">(028) 9543 9599</li>	
						<li><a id="social" href="https://www.facebook.com/PWDBelfast"><i class="fa fa-facebook"></i></a></li>
						<li><a id="social" href="https://twitter.com/pwddevelopments"><i class="fa fa-twitter"></i></a></li>
						<li><a id="social" href="https://plus.google.com/u/1/b/110067631828991244358/110067631828991244358"><i class="fa fa-google-plus"></i></a></li>
						<li><a id="social" href="http://instagram.com/pwd_developments"><i class="fa fa-instagram"></i></a></li>
					</ul>					
					<br/>
					<br/>
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="index.html#header">Home</a></li>
				    	<li><a href="index.html#about">About</a></li>
				    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Developments<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index.html#current_devs">Current Developments</a></li>
								<li><a href="index.html#previous_devs">Previous Developments</a></li>
								<li><a href="index.html#coming_soon">Coming Soon</a></li>
          					</ul>
		  				</li>
				    	<li><a href="index.html#news">News</a></li>
				    	<li><a class="lastlink" href="index.html#contact">Contact</a></li>
					</ul> 	
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->

<body>
<br/>
<br/>
<br/>
<br/>
<br/>

<section id="admin">
<h1>Update to "BOOKED"</h1>

<form>
        
<?php

include('connect.php');

$sql = "SELECT PlotNumber FROM Developments WHERE Price !='BOOKED'";
$result = mysql_query($sql);      

echo "<select name=\'PlotNumber\'>";
echo "<option  size=30 ></option>";
    while($row = mysql_fetch_array($result))
    {
    echo "<option value='" . $row['PlotNumber'] . "'>" . $row['PlotNumber'] . "</option>";
}
echo "</select>";

?>
     
<input name="update" type="submit" value="Submit" id="update" class="update">
</form>
 
    <h1>Update to "BOOKED"</h1>
    
<form>
<label>Heading</label>
<input name="rubes" type="text" id="rubes" class="rubes">
<label>Text</label>
<input name="text" type="text" id="text" class="text">
<input type="submit" value="Submit" id="updateText" class="updateText" name="updateText">
</form>
    

 
</section>
<section style="margin-top: 900px; margin-bottom: 5%" id="result">   

			
</section>
<script>
    
    $('.update').click(function(){   
        $.ajax({
            type: "UPDATE",
            url: 'php/update.php',
            success:function(html){
            document.getElementById("result").innerHTML=html;   
            }
            
        });
        return false;
    });
   
</script>
    <script>
    
    $('.updatetext').click(function(){   
        $.ajax({
            type: "UPDATE",
            url: 'php/updatenews.php',
            success:function(html){
            document.getElementById("result").innerHTML=html;   
            }
            
        });
        return false;
    });
   
</script> 


    
<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->

<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->

</body>
<!-- FOOTER -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<!-- SOCIAL ICONS -->
			<div class="col-sm-6 col-sm-push-6 footer-social-icons">
				<span>Follow us:</span>
				<a href="https://www.facebook.com/PWDBelfast"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/pwddevelopments"><i class="fa fa-twitter"></i></a>
					<a href="https://plus.google.com/u/1/b/110067631828991244358/110067631828991244358"><i class="fa fa-google-plus"></i></a>
					<a href="http://instagram.com/pwd_developments"><i class="fa fa-instagram"></i></a>		
					</div>
			<!-- /SOCIAL ICONS -->
			<div class="col-sm-6 col-sm-pull-6 copyright"><p>&copy; 2016 <a href=""><img src="img/logos/blocklogo.png" style="width:80px"></a>. All Rights Reserved.</p></div>
		</div>
	</div>
</footer>
	<!-- /FOOTER -->
	<!-- Scroll-up -->
	<div class="scroll-up"><ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul></div>	
</html>
