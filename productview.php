<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

   <?php include("./view/header.php")?>
    <section>
        <div class="viewproduct">
            <div class="product-small-img">
                <img src="images/products/pant1/p1.webp" onclick="displayImg(this)">
                <img src="images/products/pant1/p2.webp" onclick="displayImg(this)">
                <img src="images/products/pant1/p3.webp" onclick="displayImg(this)">
            </div>
            <div class="img-container">
                <img id="imageBox" src="images/products/pant1/p1.webp">
            </div>
            <div class="prod-details">
                <h2>Cargo Pants</h2>
                <p>Stylish Straight Fit Pants</p>
                <h3>Description</h3>
                <p>Color:</p>
                <p>Style:</p>
                <p>Pattern:</p>
                <p>Details:</p>
                <p>Type:</p>
                <div class="prod-qty-action">
                    <div class="qty-flex">
                        <div><i class="bi bi-dash-lg minus"></i></div>
                        <input type="number" name="prod-qty" id="prod-qty" class="prod-qty" maxlength="10S" value=1>
                        <div ><i class="bi bi-plus-lg plus"></i></div>
                    </div>
                    
                    <div class="actions">
                        <button type="submit" title="Add to cart" class="cart-btn" id="cart-btn"><span>Add to cart</span></button>
                    </div>
                </div>
                <p>Our policies</p>
                <p>Availability:<span>In Stock</span></p>
            </div>
        </div>
    </section>
    <section class="cart-container content-section">
        <h2 class="cart-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="images/products/dress1/d1.webp" alt="" width="100" height="100">
                    <span class="cart-item-title">Dress</span>
                </div>
                <span class="cart-price cart-column">Rs 500</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" value="1">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>

    </section>

    <script>
        function displayImg(smallImg){
            var fullImg = document.getElementById("imageBox");
            fullImg.src = smallImg.src;
        }
    </script>


    <?php include("./view/footer.php") ?>
  <script src="main.js"></script>
</body>
</html>