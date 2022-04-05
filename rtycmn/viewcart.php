

<!DOCTYPE html>
<html lang="en">
<head>
<title>ViewCart</title>
</head>
<?php include("header.php"); ?>
  
  <div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered text-center">
          <thead class="bg-success text-white fs-5">
            <th>Serial No.</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            
          </thead>
          <tbody>
          <?php
          
          
          

          if(isset($_SESSION['myCart'])){     
            foreach($_SESSION['myCart'] as $key => $value){
              $key += 1;

              // $subtotal = $value['Price'] * $value['Quantity'];
                // if($value['Quantity'] >= 2 && $value['Quantity'] <= 4) {
                //   $discount = $subtotal * 0.1; 
                // }else if ( $value['Quantity'] >= 5 && $value['Quantity'] <= 10){
                //   $discount = $subtotal * 0.25;
                // }else if($value['Quantity'] == 1){
                //   $discount = 0;
                // }

                echo "
                <tr>
                  <td>$key</td>
                  <td>$value[Name]</td>
                  <td>$value[Price]</td>
                  <td>$value[Quantity]</td>
                  <td></td>
                  <td></td>
                </tr>";
            
            }
          }

                                  // $orders= file("C:/xampp/htdocs/Assignment2/orders.txt");

                                  // $number_of_orders = count($orders);
                                  // if ($number_of_orders == 0) {
                                  //   echo "<p><strong>No orders pending.<br />
                                  //         Please try again later.</strong></p>";
                                  // }
                              
                                  // for ($i=0; $i<$number_of_orders; $i++) {
                                  //   echo $orders[$i]."<br />";
                                  // }
          session_destroy();
          ?>
          <!-- <?php
          if(isset($_POST['clear'])){
            $_SESSION['myCart'] = array();
          }
          ?>
          <form action="" method="post">
          <button type="submit" name="clear">Clear Cart</button>
          </form> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
</html>