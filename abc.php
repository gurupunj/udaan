<?php
  /*
   *  @author   Gopal Joshi
   *  @wesite   www.sgeek.org
   *  @about    PayUMoney Payment Gateway integration in PHP
   */

  $merchant_key  = "gtKFFx";
  $salt          = "eCwWELxi";
  $payu_base_url = "https://test.payu.in"; // For Test environment
  $action        = '';
  $currentDir    = 'http://localhost/creative/payment/payumoney/';
  $posted = array();
  if(!empty($_POST)) {
    foreach($_POST as $key => $value) {    
      $posted[$key] = $value; 
    }
  }

  $formError = 0;
  if(empty($posted['txnid'])) {
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  } else {
    $txnid = $posted['txnid'];
  }

  $hash         = '';
  $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

  if(empty($posted['hash']) && sizeof($posted) > 0) {
    if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
    ){
      $formError = 1;

    } else {
      $hashVarsSeq = explode('|', $hashSequence);
      $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
      }
      $hash_string .= $salt;
      $hash = strtolower(hash('sha512', $hash_string));
      $action = $payu_base_url . '/_payment';
    }
  } elseif(!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $payu_base_url . '/_payment';
  }
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <h2></h2>
    <br/>
    <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  <style type="text/css">
    h1, #mirror
    {
      margin-top:150px;
      color: grey;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 40px;
    }
    #mirror
    {
      -moz-transform: scale(1, -1);
    -webkit-transform: scale(1, -1);
    -o-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    transform: scale(1, -1);
    opacity: 0.4;
    margin-top: -36px;
    }
    td
    {
      font-weight: bolder;

      }
      </style>
</head>
<body>
<div class="jain-container">
    <nav class="navbar navbar-default navbar-fixed-top" >
      
<div class="container-fluid header-border" style="padding-left: 0;padding-right: 0; ">
    <div class="container"  padding-left: 0; padding-right: 0">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="center" >
  
    
    <img class="img-responsive " src="image/logo-light.png" style="width:130px;">
  
    
  </div>
  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="padding-left: 0;padding-right: 0">
    
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-target=".navbar-collapse"  data-toggle="collapse" style=" background-color: transparent; border: none;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
                        
     
    </div>
    <div class="collapse navbar-collapse" >
           <ul class="nav navbar-nav" >
        
       <li><a class="active" href="index.php">Home</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="workshop.php">Workshops &amp; Training</a></li>
        <li ><a href="our_team.html">Our Team</a></li>
        <li style="margin-top: 25px; margin-left: 40px;" ><button style="background-color: #801e09;" type='button' class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">LOG IN </button></li >
        
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
           <div class="modal-footer">
          <button style="background-color: #9e3f3cb3;" class="btn btn-primary btn-block">LOG IN</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</div>
<center><h1>PAYMENTS FORM</h1>
<h1 id="mirror">PAYMENTS FORM</h1>
 <center>
 <fieldset style="max-width: 542px;">
      <legend><b>Please&nbsp;fill&nbsp;carefully</b></legend>
<form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $merchant_key ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td style="font-size:20px;"><b>Mandatory Parameters</b></td>
        </tr>
        <tr> 
          <td>Amount <span class="mand">*</span>: </td>
          <td><input name="amount" type="number" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name <span class="mand">*</span>: </td>
          <td><input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
  </tr>
        <tr>
          <td>Email <span class="mand">*</span>: </td>
          <td><input type="email" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone <span class="mand">*</span>: </td>
          <td><input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info <span class="mand">*</span>: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URL <span class="mand">*</span>: </td>
          <td colspan="3"><input type="text" name="surl" value="<?php echo (empty($posted['surl'])) ? $currentDir.'success.php' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URL <span class="mand">*</span>: </td>
          <td colspan="3"><input type="text" name="furl" value="<?php echo (empty($posted['furl'])) ? $currentDir.'failure.php' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="" size="64" /></td>
        </tr>
        
        <tr>
          <td style="font-size:20px;"><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input type="text" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input type="text" name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input type="text" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input type="text" name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input type="text" name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input type="text" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input type="text" name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input type="text" name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input type="text" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input type="text" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
       </tr>    

        <tr>
          <td>UDF3: </td>
          <td><input type="text" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input type="text" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input type="text" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input type="text" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><button type="submit" style="width:140px; margin-top:20px;" class="btn btn-info">Submit</button></td>
          <?php } ?>
        </tr>
      </table>
    </form><
</fieldset></center>
<footer id="myFooter">
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
