<?php



function cabecera(){

    echo '<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript">
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout(\'display_ct()\',refresh)
}

function display_ct() {
  var x = new Date()
  var x1=x.getDate() + "/" + (x.getMonth() + 1) + "/" + (x.getYear()+1900);
  x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
  document.getElementById(\'ct\').innerHTML = x1;
display_c();
 }
</script>

	<title>Timbre Musical 1.0</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Catchy Footer Widget Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body onload=display_ct();>


	<h1>Timbre Musical</h1>
	<div class="main-agile">
		<div class="footer-top-agileinfo">
			<div class="footer-top-grids-wtwo ftl-w3">







    ';



}

function fin(){


    echo '

    </div>

			<div class="clear"></div>
		</div>
		<div class="footer-bottom-agileits">
			<div class="footer-btm-grids-wte fbl-w3">
            <br>
				<h3>Tornar al inici</h3>
				<ul>
					<li><a href="./index.php">Inici</a></li>

				</ul>
			</div>

			<div class="clear"></div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2019 Timbre Musical. All Rights Reserved | Designed and developed by Santi Profe</p>
	</div>
</body>
</html>

    ';




}



?>
