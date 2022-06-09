<!DOCTYPE html>
<html lang="en-US">
<head>
  
<title>Cairo GRND Restaurant</title>
<link rel="icon" type="image/x-icon" href="Cairo GRND Restaurant.png">                   <!--icon/logo of the website -->
<meta charset="UTF-8">                                                 <!-- covers almost all of the characters and symbols in the world! -->
  
<style>
.grid-container
{
display:grid;
grid-template-columns:auto;
background-color:Lightgray;
padding:10px;
}

.grid-item
{
background-color:rgba(255,255,255,0.9);
border:1px solid rgba(0,0,0,0.1);
padding:20px;
text-align:center;

}

body
{
font-family:Ariel,Helvetica;
}

a:link,a:visited
{
color:white;
}

a:hover
{
color:white;
text-decoration:underline;
}
a:active
{
color:gray;
text-decoration:underline;
}


div.container 
{
  text-align: center;
  
}
  
ul 
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
  
li 
{
  float: left; 
}

li a:link 
{
  display: block;
  padding: 12px;
  color:white;
 }
  
li a:hover
{
text-decoration:underline;
background-color:gray;
}

div.sticky
{
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
}
  
.TopButton
{
  background-color:white;
  color:black;
  font-size:20px;
  border:1px solid black;
  cursor:pointer;
  
}
</style>
</head>
  
<a href="http://localhost/homepage.php"><img title="Cairo GRND Restaurant"style="padding:10px;" src="Cairo GRND Restaurant.png"alt="Cairo GRND Restaurant" width="110" height="120"> </a>
                                       <!-- The title refers to the tiptoe of the image-->
  
<body>
  
<script>
function BigImage(x)
{
x.style.width= "300px";
x.style.height= "300px";

}

function NormalImage(x)
{
x.style.width="250px";
x.style.height="250px";


}
</script>
  
<h1 id="Top">  </h1>   <!--id "Top" is used in the Top button -->
  
<div class="sticky" style="background-color:black;"> <!--Navigation bar = set of links.Note:'#' will be changed with the real URL -->
<ul>
  <li><a href="http://localhost/homepage.php">Home</a></li>
  <li><a href="http://localhost/News.html">News</a></li>
  <li><a href="http://localhost/aboutUs.html">About</a></li>
   <li><a href="ShoppingCart.php">Cart</a></li>
  <a href = "logOut.php" class="btn btn-outline"> Log Out</a>
</ul>
</div>
<br><br>
  
<div class="grid-container">
<div class="grid-item"> <a href="http://localhost/BreakfastMenu.html"><img src="breakfast.jpg"  width="250" height="250" alt="breakfast" onmouseover="BigImage(this)" onmouseout="NormalImage(this)"> </a>
   <div class="container">
   <p> Breakfast</p> 
   </div>
</div>


<div class="grid-item"> <a href="http://localhost/lunchmenu.html"><img src="lunch.jpg" width="250" height="250" alt="lunch" onmouseover="BigImage(this)" onmouseout="NormalImage(this)"></a>
  <div class="container">
  <p> Lunch</p> 
  </div>
</div>
  
<div class="grid-item"> <a href="http://localhost/Dinnermenu.html"> <img src="dinner.jpg" width="250" height="250" alt="Dinner" onmouseover="BigImage(this)" onmouseout="NormalImage(this)"> </a>
   <div class="container">
   <p> Dinner</p> 
   </div>
</div>

<div class="grid-item"> <img src="drinks.jpg" width="250" height="250" alt="Beverages" onmouseover="BigImage(this)" onmouseout="NormalImage(this)"> 
   <div class="container">
   <p> Beverages</p> 
   </div>
</div>

<div class="grid-item"><a href="http://localhost/compose.html" ><img src="compose.jpg" width="250" height="250" alt="Compose Sandwitch" onmouseover="BigImage(this)" onmouseout="NormalImage(this)"></a> 
   <div class="container">
   <p> Compose Sandwitch</p> 
   </div></div>

</div> 
<br>
<a href="#top"> <button title="Back To Top"class="TopButton" type="button"> &uarr; Top</button></a>

<footer>
<br>

 <div style="background-color:black; padding:20px; font-family:sans-serif; ">
  <p> <a title="Inquiries" href="mailto:CairoGRNDRestaurantInquiries@gmail.com">Inquiries</a>	</p>    <!-- mailto:someone@gmail.com is used to send email-->
  <p> <a title="Careers"   href="careers.php"> Careers</a></p>


</div>
</footer>



<div style="background-color:LightGray; font-family:serif; ">
<p style="text-align:center; font-Size:15px;"> Copyright &copy; 2022 Cairo GRND Restaurant </p>    <!-- ' &copy; ' is a copyright symbol-->
</body>
</html>


