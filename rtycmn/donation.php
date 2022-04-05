
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Donation</title>
</head>
 
<?php 

include("header.php");
 ?>
    
    <div class="container pt-5">  
        <div class="text-center">    
            <div class="signup-form">
                <form style="max-width: 450px; margin:auto;" action="donation.php" method="post" enctype="multipart/form-data">
                    <h2>Donation</h2>
                    <div class="form-group p-2">
                        <div class="row">
                            <div class="col">First name</div>
                            <div class="col">Last name</div>
                        </div>        	
                    </div>
                    <div class="form-group p-2">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                        </div>        	
                    </div>
                    <div class="form-group p-2">
                        <label for="Donation_amount">Credit Card Number</label>
                        <input type="Credit_Number" class="form-control" name="Credit_Number" pattern="[0-9\s]{16}" title="XXXXXXXXXXXXXXXX."placeholder="16 digit code on card Do not inlcude -EX:xxxx-xxxx-xxxx-xxxx" required="required">
                    </div>
                    <div class="form-group p-2">
                        <label for="Sec_Code">Security Code</label>
                        <input type="Sec_Code" class="form-control" name="Sec_Code" pattern="[0-9\s]{3}" title="xxx"placeholder="Three Digit Code on back of card EX:xxx">
                    </div>
                    <div class="form-group p-2">
                        <label for="ex_date">Expiration Date</label>
                        <select name='expireMM' id='expireMM'>
                            <option value=''>Month</option>
                            <option value='01'>01</option>
                            <option value='02'>02</option>
                            <option value='03'>03</option>
                            <option value='04'>04</option>
                            <option value='05'>05</option>
                            <option value='06'>06</option>
                            <option value='07'>07</option>
                            <option value='08'>08</option>
                            <option value='09'>09</option>
                            <option value='10'>10</option>
                            <option value='11'>11</option>
                            <option value='12'>12</option>
                        </select> 
                        <select name='expireYY' id='expireYY'>
                            <option value=''>Year</option>
                            <option value='20'>2020</option>
                            <option value='21'>2021</option>
                            <option value='22'>2022</option>
                            <option value='23'>2023</option>
                            <option value='24'>2024</option>
                        </select> 
                        <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                    </div>
                    <div class="form-group p-2">
                        <label for="donated_amount">How Much Do you want to donate?</label>
                        <input type="number" class="form-control" min="0" max="10000" step="1" name="donated_amount"  required="required" placeholder="$xx.xx">
                        
                    </div>
                    <div class="form-group p-2">
                        <button type="submit" name="donate" class="btn btn-success btn-lg btn-block">donate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>

</html>
