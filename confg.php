<?php
$apikey="rzp_test_0spyikdWZmxcjz";
?>
<form action="https://www.example.com/payment/success/" method="POST">
    <script    src="https://checkout.razorpay.com/v1/checkout.js"    
    data-key="<?php echo $apikey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys  
      data-amount="<? php $_POST['amount']*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.   
       data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to 
       enable International for your account  
         data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.   
          data-buttontext="Pay with Razorpay"   
           data-name="Donation Camp"   
            data-description="Project"   
             data-image="start.html"   
              data-prefill.name="<?php echo $_POST['name'];?> 
              data-prefill.email="<?php echo $_POST['email'];?> 
              data-prefill.contact="<?php echo $_POST['contact'];?> 
                 data-prefill.email="gaurav.kumar@example.com"   
                  data-theme.color="#F37254">
                </script>
                <input type="hidden" custom="Hidden Element" name="hidden">
            </form>
