
<!DOCTYPE html>
<html lang="en">
<head>
<title>Store</title>    
</head>
<?php include("header.php"); ?>
 
<!---content goes here ----->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/bag_pack.jpg" class="card-img-top" alt="Bag"><hr>
                    <div class="card-body text-center">  
                        <h5 class="card-title fw-bold">Bag</h5>
                        <p class="card-text">Price: $20</p>
                            <input type="hidden" name="name" value="Bag">
                            <input type="hidden" name="price" value="20">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/hoodie_jacket.jpg" class="card-img-top" alt="Hoodie Jacket"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Hoodie Jacket</h5>
                        <p class="card-text">Price: $25</p>
                            <input type="hidden" name="name" value="Hoodie Jacket">
                            <input type="hidden" name="price" value="25">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/bracelet.jpg" class="card-img-top" alt="Bracelet"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Bracelet</h5>
                        <p class="card-text">Price: $5</p>                    
                            <input type="hidden" name="name" value="Bracelet">
                            <input type="hidden" name="price" value="5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/key_chain.jpg" class="card-img-top" alt="Key Chain"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Key Chain</h5>
                        <p class="card-text">Price: $5</p>                     
                            <input type="hidden" name="name" value="Key Chain">
                            <input type="hidden" name="price" value="5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/shirt.jpg" class="card-img-top" alt="T-Shirt"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">T-Shirt</h5>
                        <p class="card-text">Price: $20</p>                       
                            <input type="hidden" name="name" value="T-Shirt">
                            <input type="hidden" name="price" value="20">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/handbag.jpg" class="card-img-top" alt="Hand Bag"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Hand Bag</h5>
                        <p class="card-text">Price: $15</p>                      
                            <input type="hidden" name="name" value="Hand Bag">
                            <input type="hidden" name="price" value="15">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5 " style="width: 12rem;">
                        <img src="storePics/logo.jpg" class="card-img-top" alt="RTYC logo"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">RTYC Logo</h5>
                        <p class="card-text">Price: $5</p>                      
                            <input type="hidden" name="name" value="RTYC Logo">
                            <input type="hidden" name="price" value="5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-auto">
            <form action="manage_cart.php" method="post">
                <div class="card mb-5" style="width: 12rem;">
                        <img src="storePics/flag.jpg" class="card-img-top" alt="Flag"><hr>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Flag</h5>
                        <p class="card-text">Price: $5</p>
                            <input type="hidden" name="name" value="Flag">
                            <input type="hidden" name="price" value="5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div> 
        
<?php include("footer.php"); ?>
</html> 