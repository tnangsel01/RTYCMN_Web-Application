<?php
include "connection.php";
include "header.php";
    session_start();
    
    if($_SESSION["LoggedIn"]){
                  foreach($_SESSION['cart'] as $key => $value){
                    $snum = $key+1;
                    $total=$value["Quantity"] * $value["Price"];
                        if($value['Item_Name']=="Bag"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (500,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);
                        }
                        else if($value['Item_Name']=="Bracelet"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (501,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']=="Flag"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (502,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']=="Hand Bag"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (503,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']=="Hoodie Jacket"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (504,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']=="Key Chain"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (505,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']==" RTYC Logo"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (506,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                        else if($value['Item_Name']=="T-Shirt"){
                            $sql="insert into purchases(Item_Id,User_Id,Total,Quantity) values (507,$_SESSION[User_ID],$total,$value[Quantity]);";
                            $result = mysqli_query($dbs,$sql);

                        }
                }

      unset($_SESSION["cart"]);        
    echo "
        <script>
            alert('Purchases Made Succesfully.');
            window.location.href='store.php';
            
        </script>
        ";
            }
    else{
       echo "
        <script>
            alert('Must be signed in to purchase.');
            window.location.href='store.php';
            
        </script>
        ";
    }
?>