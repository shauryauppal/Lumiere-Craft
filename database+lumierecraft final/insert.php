<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['emailid'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$item = $_POST['item'];
$comment=$_POST['comment'];
$subject="Lumiere craft form submit";
$sql = "INSERT INTO `contact` (`name`, `emailid`, `address`, `phonenumber`, `itemname`, `comment`) VALUES ('$name','$email','$address','$phone','$item','$comment')";

if (!mysql_query($sql,$conn)) 
	die('Error: ' . mysql_error());

if(isset($_POST['submit']))
{
	$to="shauryauppal00111@gmail.com";
	$from=$email;
	$message=$name." ; ".$address." ; ".$phone." ; ".$item. " ; ". $comment. " ; ";
    $headers="From:" . $from;
	mail($to,$subject,$message,$header);
	}

//echo "1 record added";

mysql_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
<title style="color:blue;font-size:3em">LUMIERE CRAFT</title>
</head>
<link rel="icon" href="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSOOAFoWnOsEHB7dAuYWfqRnuH_VfiCkHck4cLCTXq9L2rWcI-Z" type="image/jpg">
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="small-device.css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>
<body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})
</script>



<body background="http://panel.ccsbmx.com/wp-content/uploads/2014/07/White-Wood-Panel-Wallpaper.jpg" >
<!-- Uses a header that contracts as the page scrolls down. -->
<style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}




</style>

<div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><a href="index.html" style="text-decoration:none;color:white;font-size:2em;" >LUMIERE CRAFT</a></span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="waterfall-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp">
        </div>
      </div>
    </div>
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">HOME</a>
        <a class="mdl-navigation__link" href="products.html">PRODUCTS</a>
        <a class="mdl-navigation__link" href="aboutus.html">ABOUT US</a>
        <a class="mdl-navigation__link" href="contactus.html">CONTACT US</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">LUMIERE CRAFTS</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.html">HOME</a>
      <a class="mdl-navigation__link" href="products.html">PRODUCTS</a>
      <a class="mdl-navigation__link" href="aboutus.html">ABOUT US</a>
      <a class="mdl-navigation__link" href="contactus.html">CONTACT US</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
 	
	
	
	<br><br><br><br>
	
	
	<center>
	<p style="font-size:5em;color:red">We will get back to you soon...</p>
	</center>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<hr>
<p style="font-size:2em"><b>Get connected with us:</b></p>
<a href="https://www.facebook.com/LumiereGiftShop/" style="text-decoration:none;color:none;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW5iHSee5OqmRg4JVCIcK9BfDMtbtmRsuzwFGqXMVUPRr5R6_S" height="50px" width="50px"/>
</a>
<a href="#" style="text-decoration:none;color:none;"><img src="http://www.coetail.com/seriously/files/2016/04/twitter-logo.png" height="50px" width="85px" style="padding-left:20px;padding-right:20px;" />
</a>
<a href="https://www.instagram.com/lumieregiftshop/" style="text-decoration:none;color:none;"><img src="http://www.ci.temple.tx.us/ImageRepository/Document?documentID=16351" height="50px" width="50px" />
</a>
<hr>
<!--payment bar created here-->
<div id="payment">
<p style="font-family:impact;font-size:2em;color:black">Payment options:</p>
<a href="PaytmQR.html" ><img src="http://techstory.in/wp-content/uploads/2016/01/Paytm_logo-1.png" id="two"/></a>
<a href="https://www.mobikwik.com/moneytransfer" ><img src="data:image/png;base64,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" id="three" />
<a href="contactus.html"><img src="http://www.baleyo.com/media/wysiwyg/cod_logo.jpg" id="two"/></a>
</div>
<p style="text-align:center;font-size:1em;background:black;color:red;">&copy LUMIERE CRAFT</p>

</div>
  </main>
</div>
</body>
</html>