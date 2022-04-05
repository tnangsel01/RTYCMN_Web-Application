
<!DOCTYPE html>
<html lang="en">
<head>
<title>Store</title>    
</head>
<?php include("header.php"); ?>
 
<!---content goes here ----->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag</h5>
                        <p class="card-text">Price: $20</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Bag">
                            <input type="hidden" name="price" value="$20">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hoody Jacket</h5>
                        <p class="card-text">Price: $25</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Hoody Jacket">
                            <input type="hidden" name="price" value="$25">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bracelet</h5>
                        <p class="card-text">Price: $5</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Bracelet">
                            <input type="hidden" name="price" value="$5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Key Chain</h5>
                        <p class="card-text">Price: $5</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Key Chain">
                            <input type="hidden" name="price" value="$5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">Price: $20</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="T-Shirt">
                            <input type="hidden" name="price" value="$20">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hand Bag</h5>
                        <p class="card-text">Price: $15</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Hand Bag">
                            <input type="hidden" name="price" value="$15">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">RTYC Logo</h5>
                        <p class="card-text">Price: $5</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="RTYC Logo">
                            <input type="hidden" name="price" value="$5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="addtocart.php" method="post">
                <div class="card mb-5" style="width: 15rem;">
                        <img src="logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Flag</h5>
                        <p class="card-text">Price: $5</p>
                        <p>Quantity</p>
                            <input type="number" name="qty" min="1" max="10" class="form-control"><br>
                            <input type="hidden" name="name" value="Flag">
                            <input type="hidden" name="price" value="$5">
                        <button type="submit" name="addtocart" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div> 
        
<?php include("footer.php"); ?>
</html> 