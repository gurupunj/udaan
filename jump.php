<!doctype html>
<html>
<head>
  <title>Udaan|home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="slider.css" rel="stylesheet" type="text/css">
  <link href="animated.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="Footer-udaan.css" rel="stylesheet" type="text/css">
 <link href="eventcss.css" rel="stylesheet" type="text/css">
 <link href="re.css" rel="stylesheet" type="text/css"> 

<script >
	$(document).ready(function(){
		$(".navbar-toggle").on("click",function(){
			$(this).toggleClass("active")
		})
	})
</script>
</head>

<body>
<div style="margin-bottom: 200px; " class="jain-container">
		<nav class="navbar navbar-default navbar-fixed-top" >
			
<div class="container-fluid header-border" style="padding-left: 0;padding-right: 0; ">
		<div class="container"  padding-left: 0; padding-right: 0">
	 <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center" >
  
    
    <img class="img-responsive " src="image/logo-light.png" style="width:130px;">
  
    
  </div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="padding-left: 0;padding-right: 0">
    
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-target=".navbar-collapse"  data-toggle="collapse" style=" background-color: transparent; border: none; ">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
                        
     
    </div>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav" >
        
        <li><a class="active" href="index.php">Home</a></li>
        
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="workshop.php">Workshops </a></li>
        <li ><a href="shop.php">Shop</a></li>
        <li ><a href="tu.php">Tutorials</a></li>
        <li ><a href="our_team.html">Our Team</a></li>
        <li style="margin-top: 25px; margin-left: 40px;" ><button style="background-color: #801e09;" type='button'  class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">LOG IN </button></li >
        
      </ul> 
   </div>
    
   </div>
  </div>
</div>

</nav>

</div>

	
<div class="container" >

  
  
  
  <div class="modal fade" id="popUpWindow">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Login</h3>
        </div>
       
        <div class="modal-header">
          <form role="form">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email"/>
              <input type="password" class="form-control" placeholder="Password" />
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button style="background-color: #9e3f3cb3;" class="btn btn-primary btn-block">LOG IN</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<table align="center" width="800" border="4px solid black" style="border-style:groove; border-right:4px solid black;" >
<tr style="font-family:'Lithos Pro Regular'; font-weight:bold; font-size:18px; font-variant:small-caps; padding-left:6px;">
<th>name</th>
<th>gender</th>
<th>contact</th>
<th>workshop</th>
<th>email</th>
<th>dob</th>
<th>college</th>
<th>address</th>
</tr>
<?php
//include  "connection.php";
$con=mysqli_connect("127.0.0.1","root","","udaan");
$sql="select * from t";
$res=mysqli_query($con,$sql);
while ($arr=mysqli_fetch_array($res)) 
{
?>
<tr>
<th><?php echo $arr['name'];?></th>
<th><?php echo $arr['gender'];?></th>
<th><?php echo $arr['contact'];?></th>
<th><?php echo $arr['workshop'];?></th>   
<th><?php echo $arr['email'];?></th>
<th><?php echo $arr['dob'];?></th>
<th><?php echo $arr['college'];?></th>
<th><?php echo $arr['address'];?></th>

<th><a href="delete.php?uid=<?php echo $arr['id']; ?>">delete</a></th>

<?php }
?>
</table>
<a href="logout.php" ><button  style="background-color: red;" type='button' class="btn btn-success" > Logout</button>
</a>                       

    <footer id="myFooter" style="margin-top: 460px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
            
        <div class="social-networks col-sm-3 myCols" style="background-color: #3c3d41;">
        	<h5>Stay Connected</h5>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
        </div>
            </div>
            
        </div>

        <div>
        <div class="footer-copyright col-sm-6 myCols">
            <p>©  Copyright 2018 UDAAN Innovations Pvt. Ltd. | All Rights Reserved</p>
        </div>
        <div class="footer-copyright col-sm-6 myCols">
            <p><a href="#">Terms of Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms of Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Privacy Policy</a></p>
        </div>
    </div>
    </footer>
   


</body>
</html>
