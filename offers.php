<!DOCTYPE html>
<html>
<head>
	<title>
		offers
	</title>
	<link rel="stylesheet" type="text/css" href="idx.css">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="one.css">
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
		<header>
		<div class="head">
		
            <h2>Catering</h2>
        </div>
		<nav>
			<ul>
			    <li> <a href="one.php" class="active">Home</a></li>
				<li> <a href="aboutus.php">About us</a></li>
                <li> <a href="Packages.php">Packages</a></li>
                <li> <a href="offers.php">Offers</a></li>
                <li> <a href="#">Login</a></li>
                <li> <a href="#">order</a></li>
			</ul>
			
		</nav>
	</header>


	<div class="a">
  <div id="slider" style="height: 570px;" class="left">
    <H4 align="center">TOP Offers</H4>
    <div id="box" style="margin-left: 18%">

      <img src="images/burger.jpg">
    	}
    </div>
    <!--buttons for control-->
    <button class="prev" onclick="prevImage()">-</button>
    <button class="next" onclick="nextImage()">+</button>
  </div>
</div>
  <script type="text/javascript">
    var slider_content=document.getElementById('box');

    //contains img in array 
    var image=['burger','cake','pizza'];
    var i=image.length;
    //function for next slide

    function nextImage(){
      if (i<image.length) {
        i=i+1;
      }
      else{
        i=1;
      }
      slider_content.innerHTML="<img src="+image[i-1]+".jpg>";
    }
        function prevImage(){
      if (i<image.length+1 && i>1) {
        i=i-1;
      }
      else{
        i=image.length;
      }
      slider_content.innerHTML="<img src="+image[i-1]+".jpg>";
    }
  </script>


  <footer>
	<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
     <h3 class="foot" >
          <i class="fa fa-map-marker" style="color: white;">122/5,3rd section,Dream Road,Banani</i>

          <i class="fa fa-phone"style="color: white;">01635436220,01755509890</i>

          <i class="fa fa-envelope"style="color: white;">onlinecaterar@gmail.com</i>
          <br>
          <i class="fab fa-facebook-f"style="color: white;" aria-hidden="true"></i><a href="https://www.facebook.com/hasibul35.hasan">
          &nbsp;&nbsp;<span class="fbc">Facebook</span></a><br>
           <i class="fab fa-twitter" aria-hidden="true"></i><a href="#">
          &nbsp;&nbsp;<span class="fbc">Twitter</span></a> <br> 
           <i class="fab fa-linkedin-in" aria-hidden="true"></i><a href="#">
          &nbsp;&nbsp;<span class="fbc">Linkedin</span></a>  

    </h3>
</div>
</div>
</div>
</div>

</footer>

</body>
</html>