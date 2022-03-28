<?php
    session_start();
   
        if(isset($_POST['addtocart'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['qty'];

                $_SESSION['myCart'][] = array( 'Name' => $name, 'Price' => $price, 'Quantity' => $quantity);

                $number_of_orders = count($_SESSION['myCart']);
                if ($number_of_orders == 0) {
                echo "<p><strong>No orders pending.<br />
                        Please try again later.</strong></p>";
                }
                
                if(!(isset($order))){
                    echo '<p style="color:red">';
                    echo 'You have nothing in your cart.';
                    echo '</p';
                }
                if($quantity == null || $quantity == 0){
                    echo '<p style="color:red">';
                    echo 'You have nothing in your cart.';
                    echo '</p';
                }else if ($quantity > 10 && $order > 10){
                    echo '<p Style="color: red">';
                    echo 'You have reached your order max quantity limit of 10 shoes per customer.';
                    echo '</p>';
                }else if($quantity == null || $quantity == 0){
                    echo '<p style="color:blue">';
                    echo 'Please enter a quantity.';
                    echo '</p';
                }
                
        } 
    header('location:store.php');
?>