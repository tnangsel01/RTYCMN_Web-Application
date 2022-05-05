

<!DOCTYPE html>
<html lang="en">
<head>
<title>ViewCart</title>
</head>


<?php include "header.php"; ?>
  
  <div class="container mb-5">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center borderless  my-3">
        <h1> My Cart </h1>
      </div>
      <?php
      $count = 0;
      if(isset($_SESSION['cart'])){
          $count = count($_SESSION['cart']);
          if($count == 0){
            // if(isset($_SESSION['cart'])){
            //   if(sizeof($_SESSION['cart']) == 0){
                echo "<h3 style='text-align: center;'>Cart is empty. Please go to Store for shopping.</h3>";
              }else{
          ?>
      <div class="col-sm-12 col-md-6 col-lg-8">
        <table class="table table-border rounded text-center">
          
          <thead class="bg-warning text-white fs-5">
            <tr>
              <th>Serial No. </th>
              <th>Item Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Sub-Total</th>
              <th></th>
            </tr>
          </thead>
            <tbody class="text-center">
              <?php
                  foreach($_SESSION['cart'] as $key => $value){
                    $snum = $key+1;

                    echo "<tr>
                            <td>$snum</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                            <td>
                              <form id='uquantity' action='manage_cart.php' method='POST'>
                                <input name='Update_Quantity' type='number' class='iquantity text-center' onchange='this.form.submit();' value='$value[Quantity]' min='1' max='10'>
                                <input name='name' type='hidden'  value='$value[Item_Name]'>
                              </form>
                            </td>
                            <td class='itotal'></td>
                            <td>
                              <form action='manage_cart.php' method='POST'>
                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                <input type='hidden' name='name' value='$value[Item_Name]'>
                              </form>
                          </tr>";
                  }
              ?>
            </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <div class="border bg-light rounded p-5">
          <h4 class="text-right">Total Cost</h4>
          <h5 class="text-right" id="gtotal">  </h5>
          <form action="purchase.php" method="POST">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required="required">
              <label class="form-check-label mb-3" for="flexRadioDefault1" >Cash on Delivery</label><br>
            </div>
            <button class="btn btn-primary btn-block content-center">Make Purchase</button>
          </form>
        </div>
      </div>
      <?php
            }
          }   
      ?>
    </div>
  </div>

<script>
  var gt = 0;
  var iprice = document.getElementsByClassName('iprice');
  var iquantity = document.getElementsByClassName('iquantity');
  var itotal = document.getElementsByClassName('itotal');
  var gtotal = document.getElementById('gtotal');

  function subtotal(){
    gt = 0;
    for(i=0; i<iprice.length; i++){

      itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
      gt = gt + (iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }

  subtotal();
</script>

<?php include("footer.php"); ?>

</html>