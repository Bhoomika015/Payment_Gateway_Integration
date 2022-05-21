<?php
include_once('confg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Payment</title>
    <style type="text/css">
    .razorpay-payment-button{
        background-color: orange;
        border:none;
        color:white;
        padding: 15px 32px;
        text_align:center;
        text-decoration:none;
        display:inline-block;
        font-size:16px;
    }</style>
        
    
</head>
<body>
    <div class="row" style="padding: 100px 300px;">
    <div class="col-50">
        <div class="container">
            <form action="confg.php" methods="POST" style="padding:25px;">
            <div class="row">
                <div class="col-25">
                    <h1 style="text-align:center; margin:70px 10px;font-family:lato;"> Checkout form </h1>
                    <label for="fname"><l class="fa fa-user"></l>Full Name</label>
                    <input type="text" id="fname" name="name" placeholder ="Tom"> 
                    <label for="email"><l class="fa fa-envelope"></l>Email</label>
                    <input type="text" id="email" name="email" placeholder ="tom@gmail.com"> 
                    <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>"name="orderid">
                    <input type="hidden" value=<?php echo 1;?> name="ammount">
                    <label for="city"><l class="fa fa-mobile"></l>Mobile Number</label>
                    <input type="text" id="city" name="mobile" placeholder ="1234567890"> 
                    <label for="adr"><l class="fa fa-address"></l>Address</label>
                    <input type="text" id="adr" name="address" placeholder ="Sarita vihar Delhi"> 
</div> 
<input type="submit" value="DONATE NOW" class="btn">
</form>
</div>
</div>
</div>



</body>
</html>

