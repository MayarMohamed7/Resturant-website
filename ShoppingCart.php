<?php
  session_start();
  //Ssession_destroy();
if(isset($_SESSION['cart'])){
if(isset($_GET['action'])){
if($_GET['action']=='remove'){
   foreach($_SESSION['cart'] as $key => $val){
      if($val['name'] === $_GET['name']){
         unset($_SESSION['cart'][$key]);
		 $_SESSION['cart']= array_values($_SESSION['cart']);
	  }
   }
}

}
}
?>
<html lang="en-US">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Cairo GRND Restuarant</title>
<link rel="icon" type="image/x-icon" href="Cairo GRND Restaurant.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ShoppingCartStyle.css">
<style>
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
a:link,a:visited
{
	color:white;
}
a:hover
{
	color:lightgray;
}

</style>
</head>

<br><br>

<body>
<nav>
<div style="background-color:black;">
<ul>
  <li><a href="http://localhost/homepage.php">Home</a></li>
  <li><a href="http://localhost/News.html">News</a></li>
  <li><a href="http://localhost/Contact.html">Contact</a></li>
  <li><a href="http://localhost/aboutUs.html">About</a></li>
</ul>
</div>
</nav>
<h1></h1>
<br>

 <fieldset>
<legend style="font-family:sans-serif;"><h1>Shopping Cart</h1></legend>
<div class= "row">
<div class= "col-sm-12 col-md-6 col-lg-9">
<table class= "table table-bordered text-center">
<thead style = "background-color:#b49d80;" class="fs-5">
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
 if(isset($_SESSION['cart'])){
	 foreach($_SESSION['cart'] as $key => $val){
		 $i = $key + 1;
		 ?>
		 
		 <tr>
		 <td> <?php echo $i;?> </td>
		 <td> <?php echo $val['name'];?> </td> 
		 <td><?php echo $val['price'];?><input type="hidden" class='iprice' value='<?php echo $val['price'];?>'> </td> 
		 <td> <input type ='text' class="iqty" onchange='subTotal()' name='qty' value = '<?php echo" $val[qty]";?>'></td> 
         <td class = 'subtotal'></td>
		 <td> <a href="ShoppingCart.php?action=remove&name=<?php echo $val['name'];?>">
		<button name='remove' class = 'btn-danger'> Remove </button></a> </td>
		 <td><input type ='hidden' name='item' value = '$val[name]'> </td> 
		 
		 </tr>
		 <?php
		  
		 
	 }
}
?>
</tbody>
</table>

<tr>
<td colspan = "3" align = "right"><h4 style = "background-color:#b49d80;"> Total: </h4> </td>
<h4 id='gtotal' align = "left"> </h4>
</tr>
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
</script>
</fieldset>
<form action = 'checkout.php' method = 'POST'>
     <button class="btn btn-primary btn-purchase" type="button"> CheckOut </button>        
</form>	
<footer>



 <div style="background-color:black; padding:20px; font-family:sans-serif; ">
  <p title="Inquiries"><a href="mailto:CairoGRNDRestaurant@gmail.com">Inquiries	</p>
<p title="Careers"></a><a href=""> Careers</a></p>


</div>
</footer>



<div style="background-color:LightGray; font-family:serif; ">
<p style="text-align:center; font-Size:15px;"> Copyright &copy; 2022 Cairo GRND Restaurant </p>
</body>
</html>
