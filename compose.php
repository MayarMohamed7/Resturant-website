<html>
<head>
<title>Compose your Sandwich</title>
<link rel="icon" type="image/x-icon" href="Cairo GRND Restaurant.png">
<meta charset="UTF-8">
</head>
<a href="http://localhost/homepage.php "><img title="Cairo GRND Restaurant" style="padding:10px;" src="Cairo GRND Restaurant.png"alt="Cairo GRND Restaurant" width="110" height="120"> </a>
<br><br>
<style>
.grid-container
{
display:grid;
grid-template-columns: auto auto auto;
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
h2{
font-family: "Times New Roman", Times, serif;

font-size:45px;
text-align:center;
}
p.menuitems
{text-align:center;
}

.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 10px;
}
</style>

<body>
<script>
function BigImage1(x)
{
x.style.width= "150px";
x.style.height= "150px";

}

function NormalImage1(x)
{
x.style.width="100px";
x.style.height="100px";

}
function displayRadioValue() {
            document.getElementById("result").innerHTML = "";
            var ele = document.getElementsByTagName('input');
              
            for(i = 0; i < ele.length; i++) {
                  
                if(ele[i].type="radio") {
                  
                    if(ele[i].checked)
                        document.getElementById("result").innerHTML
                                += ele[i].name + " "
                                + ele[i].value + "<br>";
                }
            }
        }
</script>
  
</script>
<?php
$servername="localhost";
$username="root";
$password="";
$db="project";

$conn = mysqli_connect($servername, $username, $password,$db );
?>
<div style="background-color:black;">
<ul>
  <li><a href="http://localhost/homepage.php">Home</a></li>
  <li><a href="http://localhost/News.html">News</a></li>
  <li><a href="http://localhost/Contact.html">Contact</a></li>
  <li><a href="http://localhost/aboutUs.html">About</a></li>
</ul>
</div>
<br>
<body>
<h2>&#128608Compose your Sandwich&#128609</h2>

<h3>Step 1: Choose a type of bread</h3>
<h5>Bread cost 10 EGP</h5>
<div class="grid-container">
<div class="grid-item">
<img src="bread1.jfif" width="100" height="100" alt="white bread" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="white bread" name="bread" value="white bread">
  <label for="white bread">White bread</label><br>
</div>
<div class="grid-item">
<img src="bread2.jpg" width="100" height="100" alt="brown bread" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="brown bread" name="bread" value="brown bread">
  <label for="brown bread" for="brown bread">Brown Bread</label><br>
</div>
<div class="grid-item">
<img src="bread3.jpg" width="100" height="100" alt="brown bread" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="whole bread" name="bread" value="whole bread">
  <label for="whole bread">Whole Grain Bread</label><br>
</div>
</div>
<h3>Step 2: Choose 	your protein</h3>
<h5>Protien cost 40 EGP</h5>
<div class="grid-container">
<div class="grid-item">
<img src="grilledchicken.jpg" width="100" height="100" alt="Grilled chicken" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="grilled chicken" name="protein" value="grilled chicken">
  <label for="grilled chicken">Grilled chicken</label><br>
</div>
<div class="grid-item">
<img src="shrimp.jpg" width="100" height="100" alt="shrimp" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="shrimp" name="protein" value="shrimp">
  <label for="shrimp">Shrimp</label><br>
</div>
<div class="grid-item">
<img src="barbchicken.jpg" width="100" height="100" alt="barbecue chicken" onmouseover="BigImage1(this)" onmouseout="NormalImage1(this)">
 <input type="radio" id="none" name="protein" value="none">
  <label for="barbecue chicken">Barbecue Chicken</label><br>
</div>
</div>
<h3>Step 3: Choose 	your Toppings</h3>
<h5>Each topping costs 10 EGP</h5>
<div style="background-color:rgba(255,255,255,0.9);">
  <input type="checkbox" id="onion" name="topping" value="onion">
  <label for="onion"> Onions</label>&nbsp;
  <input type="checkbox" id="tomatoes" name="topping" value="tomatoes">
  <label for="tomatoes"> Tomatoes</label>&nbsp;
  <input type="checkbox" id="Lettuce" name="topping" value="Lettuce">
  <label for="Lettuce"> Lettuce</label>&nbsp;
   <input type="checkbox" id="pickles" name="topping" value="pickles">
  <label for="pickles"> Sliced Pickles</label>&nbsp;
   <input type="checkbox" id="avocado" name="topping" value="avocado">
  <label for="avocado"> Avocado slices</label> &nbsp; 
   <input type="checkbox" id="mozzarella" name="topping" value="mozzarella">
  <label for="mozzarella"> Mozzarella Cheese</label> &nbsp;
  <input type="checkbox" id="cheddar" name="topping" value="cheddar">
  <label for="cheddar"> Cheddar Cheese</label> &nbsp <br><br>
  <form action = "additem.php" method = "post">
   <input type = "hidden" name = "title" value = "Compose a sandwich">
   <input type = "hidden" name = "price" value =""><br>
   <input type = "number" name = "qty" min = "1" max = "10" placeholder= "Quantity" class="form-control">
   <input type = "submit" name = "additem" class="button item-button" value = "Add item">  
   <input type = "hidden" class="button btn-danger" value = "remove">   
   </form>
</div>
</div>
</body>
<footer>
<br>


 <div style="background-color:black; padding:20px; font-family:sans-serif; ">
  <p> <a title="Inquiries" href="mailto:CairoGRNDRestaurantInquiries@gmail.com">Inquiries</a>	</p>    <!-- mailto:someone@gmail.com is used to send email-->
  <p> <a title="Careers"   href=""> Careers</a></p>


</div>
</footer>



<div style="background-color:LightGray; font-family:serif; ">
<p style="text-align:center; font-Size:15px;"> Copyright &copy; 2022 Cairo GRND Restaurant </p>    <!-- ' &copy; ' is a copyright symbol-->
</html>
