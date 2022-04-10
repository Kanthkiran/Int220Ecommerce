<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce website </title>
    <link rel="stylesheet" type="text/css" href="Ecomphp.css ">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    <div class="container"> 
   <div class="navbar">
    <div class="logo">
        <img src="image/Bh.png">
    </div>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="index.php">Products</a></li>
            <li><a href="Ecomabout.php">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>Cart</a></li>
            <li class="nav-logout"><a href="login-user.php">LogOut</a></li>
        </ul>
    </nav>
    
    <div class="menu">
       <i class="fa fa-bars"></i> 
    </div>
   </div>
</div>
<div class="owl-carousel owl-theme">
    <div class="item"><img src="image/Bhomm.png"></div>
    <div class="item"><img src="image/Bhomm1.png"></div>
    <div class="item"><img src="image/Bhomm2.png"></div>
    <div class="item"><img src="image/Bhomm.png"></div>
    <div class="item"><img src="image/Bhomm1.png"></div>
    <div class="item"><img src="image/Bhomm2.png"></div>
    <div class="item"><img src="image/Bhomm.png"></div>
    
</div>
<!-- Categories -->
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
         <img src="image/fashion.png">      
        </div>
        <div class="col-3">
         <img src="image/fashion1.png">      
        </div>
        <div class="col-3">
         <img src="image/fashion.png">      
        </div>
    </div>
</div>
</div>
<!-- products -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="image/uspolo.png">
            </div>
            <div class="col-5">
                <img src="image/levis.png">
            </div>
            <div class="col-5">
                <img src="image/Godrej.png">
            </div>
            <div class="col-5">
                <img src="image/uspolo.png">
            </div>
        </div>
    </div>
</div>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10673544/2019/9/24/6b9c7688-7ca2-4d11-9e5b-a3745ecd8f761569310358973-The-Indian-Garage-Co-Men-Shirts-8481569310357131-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13000212/2021/8/5/55ba8bba-0c57-431a-a65d-fab0023a04681628139883539-The-Indian-Garage-Co-Men-Shirts-3381628139882984-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/16711032/2022/2/7/5105dab6-3fdc-4e87-b481-d171326479541644235436210-The-Indian-Garage-Co-Men-Shirts-5141644235435555-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/17357386/2022/3/16/42909457-c836-4b2f-b241-e2e6e56fdc061647425320182-The-Indian-Garage-Co-Men-Shirts-7501647425319787-1.jpg" onclick="window.location.href='D:/Sublime Text 3 (3211)/Ecomdetail.html'">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/16711032/2022/2/7/5105dab6-3fdc-4e87-b481-d171326479541644235436210-The-Indian-Garage-Co-Men-Shirts-5141644235435555-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13000212/2021/8/5/55ba8bba-0c57-431a-a65d-fab0023a04681628139883539-The-Indian-Garage-Co-Men-Shirts-3381628139882984-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/10673544/2019/9/24/6b9c7688-7ca2-4d11-9e5b-a3745ecd8f761569310358973-The-Indian-Garage-Co-Men-Shirts-8481569310357131-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
               <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13931896/2021/4/16/2e724046-6dd1-4202-b54f-d138de8456311618567837956-The-Indian-Garage-Co-Men-Shirts-5461618567837056-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/17357496/2022/3/16/8cb8a784-eb4b-43ed-a92c-9fb3180150661647425390596-The-Indian-Garage-Co-Men-Shirts-8551647425390053-1.jpg">
            <h4>Shirts</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        
    </div>

</div>
<!-- offer categoires -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13931896/2021/4/16/2e724046-6dd1-4202-b54f-d138de8456311618567837956-The-Indian-Garage-Co-Men-Shirts-5461618567837056-1.jpg" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Avaiable </p>
                <h1>Lorem ipsum</h1>
                <small>Is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</small>
            </div>
        </div>
    </div>
</div>
<!-- testiomonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/17357386/2022/3/16/42909457-c836-4b2f-b241-e2e6e56fdc061647425320182-The-Indian-Garage-Co-Men-Shirts-7501647425319787-1.jpg">
            <h3>Sean</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/16711032/2022/2/7/5105dab6-3fdc-4e87-b481-d171326479541644235436210-The-Indian-Garage-Co-Men-Shirts-5141644235435555-1.jpg">
            <h3>Sean</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13931896/2021/4/16/2e724046-6dd1-4202-b54f-d138de8456311618567837956-The-Indian-Garage-Co-Men-Shirts-5461618567837056-1.jpg">
            <h3>Sean</h3>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h2>Download Our app</h2>
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
            </div>
            <div class="footer-col-1">
                <img src="image/Bh.png">
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
            </div>
            <div class="footer-col-2">
                <h2>Useful links</h2>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affilicate</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h2>Follow us</h2>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Telegram</li>
                </ul>
            </div>
        </div>
    </div>
</div>
  <script>
    
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:14,
    autoplay:true,
    autoplayTimeout:4000,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
  </script>
  <script src="https://kit.fontawesome.com/e4780a578d.js" crossorigin="anonymous"></script>
</body>
</html>