<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["addtocart"])){
            if(isset($_SESSION['cart'])){
                $numItems = array_column($_SESSION['cart'], 'Item_Name');
                if(in_array($_POST['Item_Name'], $numItems)) {
                    echo "<script>
                        alert('Item Already Added.');
                        window.location.href='store.php';
                        </script>" 
                }else{
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['name'], 'Price'=>$_POST['price'], 'Quantity'=>1);
                    echo "<script>
                            alert('Item Already Added.');
                            window.location.href='store.php';
                            </script>"
                }
            }else{
                $_SESSION['cart'][0] = array('Item_Name'=>$_POST['name'], 'Price'=>$_POST['price'], 'Quantity'=>1);
                echo "<script>
                        alert('Item Added.');
                        window.location.href='store.php';
                        </script>"
            }
        }
        if(isset($_POST['Remove_Item'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['Item_Name'] == $_POST['name'])
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                        alert('Item Removed.');
                        window.location.href='viewcart.php';
                        </script>"
            }
        }

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