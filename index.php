<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Plus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <?php include('./view/header.php');?>

    <section id="hero">
        <h4>Summer Clothing!</h4>
        <h2>BIG DISCOUNT</h2>
        <h1>ON ALL ITEMS</h1>
        <p>Up to 70% off on selected items</p>
        <button><a href="">Shop Now</a></button>
    </section>

    <section id="featured-product"></section>
    <div id="shop" class="shop">
        <div class="item">
            <img class="prod-img" src="images/products/pant1/p1.webp" alt="">
            <div class="details">
                <h5>Tshirt Floral</h5>
                <div class="price-quantity">
                    <h4>Rs 500</h4>
                    <a class="prodcart" href="productview.html"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a>
                </div>
                
            </div>
        </div>
        <div class="item">
            <img class="prod-img"  src="images/products/pant2/p1.webp" alt="">
            <div class="details">
                <h5>Tshirt Floral</h5>
                <div class="price-quantity">
                    <h4>Rs 500</h4>
                    <a class="prodcart" href="productview.html"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="prod-img"  src="images/products/tshirt1/t1.webp" alt="">
            <div class="details">
                <h5>Tshirt Floral</h5>
                <div class="price-quantity">
                    <h4>Rs 500</h4>
                    <a class="prodcart" href="productview.html"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="prod-img" src="images/products/dress1/d1.webp" alt="">
            <div class="details">
                <h5>Tshirt Floral</h5>
                <div class="price-quantity">
                    <h4>Rs 500</h4>
                    <a class="prodcart" href="productview.html"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php include("./view/footer.php")?>
    <script src="main.js"></script>
</body>


</html>