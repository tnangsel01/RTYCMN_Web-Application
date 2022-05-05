<?php
session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['addtocart'])){
            if(isset($_SESSION['cart'])){
                
                //checking by the item's name if it already exists in the cart. If exists, don't add. 
                $itemName = array_column($_SESSION['cart'],'Item_Name');

                if(in_array( $_POST['name'], $itemName)) {
                    echo "<script>
                        alert('Item Already Added.');
                        window.location.href='store.php';
                        </script>";
                        exit;
                }else{
                    //new item adding to the existing cart.
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['name'], 'Price'=>$_POST['price'], 'Quantity'=>$value['Quantity']+1);
                    
                    echo "<script>
                            alert('New Item Added.');
                            window.location.href='store.php';
                            </script>";
                            exit();
                }
            }else{
                //first item adding to the cart.
                $_SESSION['cart'][0] = array('Item_Name'=>$_POST['name'], 'Price'=>$_POST['price'], 'Quantity'=>1);
                echo "<script>
                        alert('Item Added.');
                        window.location.href='store.php';
                        </script>";
                        exit();
            }
        }
            //Removing items from the array using unset() and rearranging array by array_values().
            if(isset($_POST['Remove_Item'])){

                foreach($_SESSION['cart'] as $key => $value){
                    if($value['Item_Name'] == $_POST['name']){
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                        echo "<script>
                            alert('Item Removed.');
                            window.location.href='viewcart.php';
                            </script>";
                            exit();
                    }
                }
            }
            //updates quantity into session and stays the same.
            if(isset($_POST['Update_Quantity'])){

                foreach($_SESSION['cart'] as $key => $value){
                    
                    if($value['Item_Name'] == $_POST['name']){
                        
                        $_SESSION['cart'][$key]['Quantity'] = $_POST['Update_Quantity'];
                        header("Location: viewcart.php");
                        exit();
                    }
                }
            }
          
    }

?>