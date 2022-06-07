<style>
    form{border:3px solid #f1f1f1;
    }


    /*full width inputs */
    input[type=text],input[type=password]
    {
        width:100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing:border-box;
    }


/*set style for all buttons*/
button{
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
/*hover effect*/
button:hover{
    opacity:0.8;
}

/*center avatar image inside container*/
.imgcontainer{
    text-align:center;
    margin: 24px 0 12px 0;
}

/*avatar image*/
img.avatar{
    width:40%;
    border-radius: 50%;

}

/*add padding to containers */
.container{
    padding:16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}
</style>

<?php 
include "admin.php";
$server="localhost";
$username="root";
$password="";
$dbname="mydb";u754444444444444444
$conn=mysqli_connect($sserver,$username,$password,$dbname);
if(isset($_POST['submit'])){
    /* $email= filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
     if ($email == true) {
    
      } else {
        echo("$email is not a valid email address");
      }
     if( strlen($_POST["password"])<6)
     {
        echo("Password Not valid");
     }*/
     if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['age'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $age=$_POST['age'];
        $query = "insert into clients(firstname,lastname,email,password,age) values('$firstname' ,'$lastname' ,'$email' ,'$password' , '$age')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo "data submited succesfully";
        }
        else
        {
            echo "data not submitted ";
        }
        }
        else{
        echo "all fileds required";
        }
        }
        ?>
        
        
         <html>
        <form action="" method="post">
            FirstName:<input type="text" name="firstname" required><br>
            LastName:<input type="text" name="lastname" required><br>
            Email:<input type="text" name="email" required><br>
            Password:<input type="password" name="password" required><br>
            Age:<input type="text" name="age" required><br>
            <input type="submit" value="submit" name="submit" required>
        </form>
        </html>
}