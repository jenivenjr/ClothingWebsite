
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <!-- Fa Fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    
    <title>Document</title>
    <style>
        h1{
            font-family: 'Merriweather Sans', sans-serif;
            color:#8f3d16;
            text-shadow: 3px 3px 2px #9e7554af;
        }
        input{
            font-family: 'Open Sans', sans-serif;
        }
        input,button{
            outline: none;
        }
    </style>
</head>
<body>
    
</body>
</html>
    <?php include('./view/header.php');?>
    
<div class="main_container">
    <!-- Animated circles -->
    <span class="animate" style="--count:5;"></span>
    <span class="animate" style="--count:3;"></span>
    <span class="animate" style="--count:4;"></span>
    <span class="animate" style="--count:4;"></span>
    <span class="animate" style="--count:3;"></span>
    <span class="animate" style="--count:6;"></span>
    <span class="animate" style="--count:7;"></span>
    <span class="animate" style="--count:8;"></span>
    <span class="animate" style="--count:4;"></span>
    <span class="animate" style="--count:3;"></span>
    <span class="animate" style="--count:6;"></span>
    <span class="animate" style="--count:7;"></span>



    <!--Form -->
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" class="login_form" method="get">
            <h1 class="login_form_">Sign In</h1> <!-- Title -->
        <!-- Enter email address -->
        <div class="group">
            <input type="text" name="email" required>
            <label>Email Address</label>
            <span class="icon">
                <i class="fa fa-envelope"></i> <!-- mail icon -->
            </span>
        </div>
        <!-- Enter Password -->
        <div class="group">
            <input type="password" name="password" required>
            <label>Password</label>
            <span class="icon">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <!-- submit button -->
        <button class="btn1" id="myBtn" formmethod="post" type="submit">Log In</button>
        <p>Not a member? <a style="color: blue;" href="">Sign Up Now</a></p>

    </form>
</div>
<?php include("./view/footer.php")?>



<!-- <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
</div> -->