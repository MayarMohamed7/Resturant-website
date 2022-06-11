<?php
  session_start();
  //Ssession_destroy();
if(isset($_SESSION['cartcash'])){
if(isset($_GET['action'])){
if($_GET['action']=='remove'){
   foreach($_SESSION['cartcash'] as $key => $val){
      if($val['name'] === $_GET['name']){
         unset($_SESSION['cartcash'][$key]);
         $_SESSION['cartcash']= array_values($_SESSION['cartcash']);
      }
   }
    
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
    background:grey;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav .search-container {
  float: right;
  
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

    .topnav input[type=text] {
    border: 1px solid #ccc;
  }
.grid-container
{
display:grid;
grid-template-columns:auto auto;
background-color:Lightgray;
padding:10px;
}
.grid-container2{
display:grid;
grid-template-columns:auto;
background-color:Lightgray;
padding:10px;
}

.grid-item
{
background-color:rgba(255,255,255,0.9);
border:1px solid rgba(0,0,0,0.1);
text-align:center;

}

h4{
    color:#13532D;
    display:inline;
    align:"left";
}
th{color:white;}
.button {
  background-color: #13532D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 10px;
}
p.menuitems
{text-align:center;
}
h2{
    color:#13532D;
font-family: "Scope One";
font-size:45px;
text-align:center;
}


</style>
<div class="topnav">

  <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
</head>
<a href="cash2.php"><img title="Cairo GRND Restaurant"style="padding:10px;" src="Cairo GRND Restaurant.png"alt="Cairo GRND Restaurant" width="110" height="120"> </a>
<body>

<hr style="border-top: 10px solid grey;">

<a href="#bottom" > <button title="go to cart" class="button item-button"> &dharl; Cart</button></a>

<br>
<h2>Breakfast</h2>
<div class="grid-container">
 <div class="grid-item">

<h2>Breakfast Tostada</h2>
<img src="Tostada.jpg" width="150" height="150" alt="Tostada" >
<p>
 Made with a fried corn tortilla, topped with eggs, refried beans, shredded cheese, salsa.
   </p>
<span class = "price" > <b> 100 EGP </b> </span> <br>

   <form action = "additemcash.php" method = "post">
   <input type = "hidden" name = "title" value = "Breakfast Tostada">
   <input type = "hidden" name = "price" value = "100">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
   <input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
   <input type = "hidden" class="button btn-danger" value = "remove">
   </form>
</div>


  <div class="grid-item">
<h2>Cranberry Pancakes</h2>
<img src="Cranberry.jpg" width="150" height="150" alt="cranberry pancakes" >
<p>Start your day off right with these easy pancakes, packed with cranberry's sour spike.</p>
    <span class = "price" > <b> 75 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Cranberry Pancakes">
<input type = "hidden" name = "price" value = "75">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>

  <div class="grid-item">
    <h2>Spinach & Egg Scramble with Raspberries</h2>
    <img src="spinacheggs.jpg" width="150" height="150" alt="Spinach & Egg Scramble with Raspberries" >
    <p>Eggs and raspberries, with filling whole-grain toast and nutrient-packed spinach</p>
    <span class = "price" > <b> 125 EGP </b> </span> <br>
    <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Spinach & Egg Scramble with Raspberries">
<input type = "hidden" name = "price" value = "125">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
  </div>




  <div class="grid-item">
<h2>Spinach-Mushroom Frittata with Avocado Salad</h2>
<img src="Frittata.jpg" width="150" height="150" alt="Frittata & Avacoda salad">
<p >Frittatas are like omelets. This vegetable-packed version is spiked with Mediterranean flavor and paired with a cool salad of lemony cucumbers and tomatoes with creamy avocados</p>
   <span class = "price" > <b> 125 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Spinach-Mushroom Frittata with Avocado Salad">
<input type = "hidden" name = "price" value = "125">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>
</div>


<h2>Lunch</h2>
<div class="grid-container">
 <div class="grid-item">
<h2>Classic Grilled Chicken</h2>
<img src="lunch1.jpg" width="150" height="150" alt="Classic Grilled Chicken">
<p >Grilled Chicken marinated with our special sauce with a side of pasta.</p>
   <span class = "price" > <b> 150 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Classic Grilled Chicken">
<input type = "hidden" name = "price" value = "150">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


 <div class="grid-item">
<h2>Chicken Panne</h2>
<img src="lunch2.jpg" width="150" height="150" alt="Chicken Panne">
<p >Golden fried chicken breasts with a side of fries and your choice of sauce.</p>
   <span class = "price" > <b> 150 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Chicken Panne">
<input type = "hidden" name = "price" value = "150">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


 <div class="grid-item">
<h2>Pan Seared Steak</h2>
<img src="lunch3.jpg" width="150" height="150" alt="Pan Seared Steak">
<p >   A premium Steak seared with a garlic rosemary-infused butter.
</p>
   <span class = "price" > <b> 165 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Pan Seared Steak">
<input type = "hidden" name = "price" value = "165">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


 <div class="grid-item">
<h2>Lemon Garlic Shrimp Pasta</h2>
<img src="lunch4.jpg" width="150" height="150" alt="Lemon Garlic Shrimp Pasta">
<p > Buttery noodles with juicy shrimp, flavored with lemon and garlic
</p>
   <span class = "price" > <b> 180 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Lemon Garlic Shrimp Pasta">
<input type = "hidden" name = "price" value = "180">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>
</div>


<h2>Dinner</h2>
<div class="grid-container">
 <div class="grid-item">
<h2>Chicken Tacos</h2>
<img src="chick.jpg" width="150" height="150" alt="Chicken Tacos">
<p >Made with tacos, topped with tomatoes, refried onions, shredded cheese, salsa,taco seasoned and shredded chicken and other toppings.</p>
   <span class = "price" > <b> 200 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Chicken Tacos">
<input type = "hidden" name = "price" value = "200">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


 <div class="grid-item">
<h2>Chicken Ramen</h2>
<img src="ramen.jpg" width="150" height="150" alt="Chicken Ramen">
<p>homemade chicken ramen, with a flavorful broth, roasted chicken, fresh veggies, lots of noodles, and a soft cooked egg.</p>
   <span class = "price" > <b> 100 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Chicken Ramen">
<input type = "hidden" name = "price" value = "100">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" ><br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


<div class="grid-item">
<h2>Creamy Salmon</h2>
<img src="salmon.jpg" width="150" height="150" alt="Creamy Salmon">
<p >pan seared salmon in a delicious creamy sauce with spinach, sun dried tomatoes and parmesan!</p>
   <span class = "price" > <b> 400 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Creamy Salmon">
<input type = "hidden" name = "price" value = "400">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


<div class="grid-item">
<h2>Rib-eye Steak</h2>
<img src="steak.jpeg" width="150" height="150" alt="Rib-eye Steak">
<p >Perfectly crusted with foaming warm butter infused with smashed garlic cloves and fresh thyme + rosemary sprigs.</p>
   <span class = "price" > <b> 600 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Rib-eye Steak">
<input type = "hidden" name = "price" value = "600">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>
</div>


<h2>Beverages</h2>
<div class="grid-container">
<div class="grid-item">
<h2>Peach Cooler</h2>
<img src="peachCooler.jpg" width="150" height="150" alt="Peach Cooler">
<p>Blood Orange juice, Ice cubes, orange slices for garnish, and lime slices</p>
   <span class = "price" > <b> 75 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Peach Cooler">
<input type = "hidden" name = "price" value = "75">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


<div class="grid-item">
<h2>Blood Orange Margaritas</h2>
<img src="BloodOrangeMargaritas.jpg" width="150" height="150" alt="Blood Orange Margaritas">
<p >Blood Orange juice, Ice cubes, orange slices for garnish, and lime slices</p>
   <span class = "price" > <b> 100 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Blood Orange Margaritas">
<input type = "hidden" name = "price" value = "100">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


<div class="grid-item">
<h2>Fresh Grape Soda</h2>
<img src="freshgrapeSoda.jpg" width="150" height="150" alt="Fresh Grape Soda">
<p > Red grapes, lemon juice,and honey </p>
   <span class = "price" > <b> 65 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Fresh Grape Soda">
<input type = "hidden" name = "price" value = "65">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>


<div class="grid-item">
<h2>Cranberry Orange Smoothie</h2>
<img src="cranberryOrangesmoothie.jpg" width="150" height="150" alt="Cranberry Orange Smoothie">
<p >Blood Orange juice, Ice cubes, orange slices for garnish, and lime slices </p>
   <span class = "price" > <b>100 EGP </b> </span> <br>
  <form action = "additemcash.php" method = "post">
<input type = "hidden" name = "title" value = "Cranberry Orange Smoothie">
<input type = "hidden" name = "price" value = "100">
<b>Quantity </b><input type = "number" name = "qty" min = "1" max = "10" >
<br>
<input type = "submit" name = "additemcash" class="button item-button" value = "Add item">
<input type = "hidden" class="button btn-danger" value = "remove">
</form>
</div>
</div>

<h2>Make your own sandwich</h2>

<div class="grid-container2">
<div class="grid-item">
<h2>Compose Sandwich</h2>
<a href="http://localhost/composecash.php"><img src="compose.jpg" width="250" height="250" alt="Comopse"> </a>
</div>
</div>
</body>
<footer>
<h2>Shopping Cart</h2>

<div class="grid-container2">
 <div class="grid-item">
  <div id="bottom">
  </div>
<fieldset>
<legend style="font-family:Scope One;"><h2>Cart</h2></legend>
<div class= "row">
<div class= "col-sm-12 col-md-6 col-lg-9">
<table class= "table table-bordered text-center">
<thead style = "background-color:#13532D;" class="fs-5">
<tr>
<th> Item no.</th>
<th> Item </th>
<th> Price </th>
<th> Quantity </th>
<th> subTotal </th>
<th> Delete </th>
</tr>
</thead>
<tbody>
<?php

$i=0;
 if(isset($_SESSION['cartcash'])){
     foreach($_SESSION['cartcash'] as $key => $val){
         $i = $key + 1;
         ?>
         
         <tr>
         <td> <?php echo $i;?> </td>
         <td> <?php echo $val['name'];?> </td>
         <td><?php echo $val['price'];?>
         <input type="hidden" class='iprice' value='<?php echo $val['price'];?>'> </td>
         <td> <input type ='text' class="iqty" onchange='subTotal()' name='qty' value = '<?php echo" $val[qty]";?>'></td>
         <td class = 'subtotal'></td>
         <td> <a href="cash2.php?action=remove&name=<?php echo $val['name'];?>">
        <button name='remove' class = 'btn-danger'> Remove </button></a> </td>
         <td><input type ='hidden' name='item' value = '$val[name]'> </td>
         
         </tr>
         <?php
          
         
     }
}
?>
</tbody>
</table>

<h4> Total: </h4> <h4  id='gtotal'> </h4>
<form action="" method="POST">
    <input type="submit" class="btn-danger" name="cancel" value="Cancel Order" />
</form>
<?php
if(isset($_POST['cancel'])){
    session_destroy();
}
?>

<script>
var gt=0;
var iprice = document.getElementsByClassName('iprice');
var iqty = document.getElementsByClassName('iqty');
var subtotal = document.getElementsByClassName('subtotal');
var gtotal = document.getElementById('gtotal');
function subTotal(){
    gt=0;
for(i=0; i< iprice.length; i++){
subtotal[i].innerText = (iprice[i].value)*(iqty[i].value);
gt = gt+ (iprice[i].value)*(iqty[i].value);
}
gtotal.innerHTML = gt;
}
subTotal();

function myFunction() {
  alert("Please review the order with the customer one last time!");
}

</script>
</fieldset>
<form action = 'checkoutcash.php' method = 'POST'>
     <button class="button item-button" type="submit" onclick="myFunction()" > CheckOut </button>

</form>
</div>
</div>
</footer>
</html>
