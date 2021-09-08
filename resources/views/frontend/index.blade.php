<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAFDO | Online Shopping</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Taviraj' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrer policy="no-referrer"
    />


    <!-- Vendor CSS Files -->
     <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    
</head>

<body>


    <!-- header -->

    <header id="header">
        <section id="header_top">

            <nav class="header_top my-3">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="img-fluid" src="assets/img/logo/top_nav/1.png"> Sell on Bafdo<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="assets/img/logo/top_nav/2.png"> Track my Order</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="img-fluid" src="assets/img/logo/top_nav/3.png"> Help Center <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="assets/img/logo/top_nav/4.png"> Save big on our app!
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="img-fluid" src="assets/img/logo/top_nav/5.png" style="height:17px; width:auto;"> Account <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Log In</a></li>
                                <li><a href="#">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


        </section>

        <section id="header_middle">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 text-center logo">
                    <a href=""><img class="img-fluid" src="assets/img/logo/bafdo.png"></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 search_box text-center">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search products, categories & more">

                        <button class="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
<div class="suggestion_search">
    <ul class="">
<li><a href="">Smart Phone</a></li>
<li><a href="">Boi Mela</a></li>
<li><a href="">Oneplus Mobile</a></li>
<li><a href="">HP Laptop</a></li>
<li><a href="">Bafdo Categories</a></li>
    </ul>
</div>
                    

                </div>
                <div class="col-lg-3  col-md-3 col-sm-12 text-center call_us">
                    <a href=""><i class="fas fa-phone-alt mx-2"></i> +88090000000</a>
                </div>
            </div>
        </section>


        
        <section id="header_bottom">

            <div class="header-bottom hidden-sm hidden-xs">

                <div class="row">

                    @include('frontend.partial.catheader')

                    <div class="col-lg-6  shopping_cart">
                        <div class="row">
                            <div class="col-3">
                                <div class="festival">
                                    <a href="" class=""><img class="img-fluid" src="assets/img/logo/upcoming.png"> <p>Festival</p</a>
                                </div>
                            </div>
                            
                            <div class="col-9 text-right">
                                
                                    <a href=""  class="cart"><img class="img-fluid add-cart" src="assets/img/icon/add button.png"> </a>
                                
                                    <a href="" class="notification_icon"><img class="img-fluid" src="assets/img/icon/notification.png"></a>
                                
                                    <a href="" class="shopping_icon"><img class="img-fluid" src="assets/img/icon/shopping.png"> </a>
                                
                            
                            
                        </div>

                    </div>

                    
                </div>

                <div class="col-lg-3 col-md-12 social text-right">
                    Follow us On:
                    <div class="social_link">
                        <a href=""><img class="img-fluid" src="assets/img/logo/social/facebook.png"></a>
                        <a href=""><img class="img-fluid" src="assets/img/logo/social/instragram.png"></a>
                        <a href=""><img class="img-fluid" src="assets/img/logo/social/linkdin.png"></a>
                        <a href=""><img class="img-fluid" src="assets/img/logo/social/twiter.png"></a>
                    </div>
                </div>

            </div>

        </section>

    </header>

    <!----------- Slider -------------------->

    @include('frontend.partial.slider')

    <!----------- body -------------------->

<div class="container">




  <!----------- special -------------------->

  <section id="special" class="special my-4">

    <div class="section_title">
        <p>Special</p>
    </div>
    <div class="row mb-5">
        
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href=""> 
                <img class="img-fluid" src="assets/img/special/Anniversary gifts.png">
                <span class="ctg_title">Anniversary</span><i class="fas fa-angle-right "></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href=""> 
                <img class="img-fluid" src="assets/img/special/Birthday gift.png">
                <span class="ctg_title">Birthday</span><i class="fas fa-angle-right "></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href=""> 
                <img class="img-fluid " src="assets/img/special/Gifts for him.png">
                <span class="ctg_title">Gift for Him</span><i class="fas fa-angle-right "></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href="">
                <img class="img-fluid" src="assets/img/special/Gifts for her.png">
                 <span class="ctg_title">Gift for Her</span><i class="fas fa-angle-right "></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href=""> 
                <img class="img-fluid" src="assets/img/special/Gifts for kids.png">
                <span class="ctg_title">Kids</span><i class="fas fa-angle-right"></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href=""> 
                <img class="img-fluid" src="assets/img/special/Wedding gifts.png">
                <span class="ctg_title">Wedding</span><i class="fas fa-angle-right "></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href="">
                <img class="img-fluid" src="assets/img/special/housewarming.png">
                <span class="ctg_title">House Warming</span> <i class="fas fa-angle-right "></i>
                </a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="special_category">
                <a href="">
                <img class="img-fluid" src="assets/img/special/Personalised gift.png">
               <span class="ctg_title">Personalised</span> <i class="fas fa-angle-right "></i></a>

            </div>
        </div>
    </div>
</section>

<!----------- traditional-------------------->
      
   
<section id="traditional_category" class="traditional_category my-4">
<div class="row">
     <div class="col-lg-3 ">
        <div class="section_title">
            <p><img class="img-fluid" src="assets/img/traditional/traditional_icon.png"> Traditional Categories</p>
        </div>
     </div>
     <div class="col-9 text-right see_more">
        <a href="">See All</a> 
     </div>
 </div>

 <div class="owl-carousel owl-theme my-2">
    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>

    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>



    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>

    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>

    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>
    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>

    <div class="item">
        <div class="product_box">

            <div class="pdt_box">

                <div class="product_img">
                  <a href=""> <i class="far fa-heart "></i></a> 
                    <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                    
                </div>
            
               

                <div class="product_details">
                    <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                    <p class="product_name">Game controller gami</p>
                    <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                        <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                            20</span></p>
                </div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                    </a>
                </div>

            </div>

           
        </div>
    </div>

  </div>

   

</section>

 <!----------- hand-picked -------------------->    

 <section id="hand_picked" class="hand_picked my-5">
    <div class="row">
        <div class="col-2">
           <div class="section_title">
               <p>Hand Picked</p>
           </div>
        </div>
        <div class="col-10 text-right see_more">
           <a href="">See More</a> 
        </div>
    </div>

    <div class="row mb-3 mt-3"> 
<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>

<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>

<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>

<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>

<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>

<div class="col-2">
    <div class="product_box">

        <div class="pdt_box">

            <div class="product_img">
              <a href=""> <i class="far fa-heart "></i></a> 
                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                
            </div>
        
           

            <div class="product_details">
                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                <p class="product_name">Game controller gami</p>
                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                        20</span></p>
            </div>
            <div class="rating">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                </a>
            </div>

        </div>

       
    </div>
</div>



     
    </div>

 </section>







      

        <!----------- Flash Deal -------------------->
        <section id="flash_deal" class="hand_picked my-5">

            <div class="row my-3">
                <div class="col-2">
                    <div class="section_title">
                        <p><img class="img-fluid mr-2" src="assets/img/hand_picked/flash_deal.png">Flash Deal</p>
                    </div>
                </div>
                <div class="col-5 offer_time">
<p>Ending in <span class="time px-1">00</span> :<span class="time px-1 ml-1">00</span> :<span class="time px-1 ml-1"> 30 </span>
</p>
                </div>

                <div class="col-5 text-right see_more">
                    <a href="">See More</a> </p>
                </div>

            </div>

            <div class="row mb-3 mt-3"> 
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                
                
                     
                    </div>

        </section>

        <!----------- Daily Featured -------------------->

        <section id="daily_featured" class="daily_featured my-5">

            <div class="row my-3">
                <div class="col-3">
                    <div class="section_title">
                        <p><img class="img-fluid mr-2" src="assets/img/hand_picked/daily_feature.png"> Daily Featured
                        </p>
                    </div>
                </div>
<div class="col-4"></div>
                <div class="col-5 text-right see_more">
                    <a href="">See More</a> </p>
                </div>

            </div>

            <div class="row mb-3 mt-3"> 
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                
                
                     
                    </div>


        </section>

        <!-- -----------may you like -------------  -->

        <section id="may_you_like" class="may_you_like my-5">

            <div class="row my-3">
                <div class="col-3">
                    <div class="section_title">
                        <p>May You Like</p>
                    </div>
                </div>
                <div class="col-4"></div>

                <div class="col-5 text-right see_more">
                    <a href="">See More</a> </p>
                </div>

            </div>

            <div class="row mb-3 mt-3"> 
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                
                
                     
            </div>
            <div class="row mb-3 mt-3"> 
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="product_box">
                
                        <div class="pdt_box">
                
                            <div class="product_img">
                              <a href=""> <i class="far fa-heart "></i></a> 
                                <img class="img-fluid pdt-img" src="assets/img/hand_picked/hemlet.png">
                                
                            </div>
                        
                           
                
                            <div class="product_details">
                                <img class="img-fluid" src="assets/img/hand_picked/faster.png">
                                <p class="product_name">Game controller gami</p>
                                <p class="pdt_price"><img class="img-fluid mr-2" src="assets/img/hand_picked/tk.png">15
                                    <span class="before_price"><img class="img-fluid " src="assets/img/hand_picked/tk.png">
                                        20</span></p>
                            </div>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <a class="add_cart" href=""> <img class="img-fluid" src="assets/img/hand_picked/add.png">
                                </a>
                            </div>
                
                        </div>
                
                       
                    </div>
                </div>
                
                
                
                     
                    </div>



        </section>
   

    <div class="load_more text-center">
        <div class="btn btn-success "><a href="">See More</a> </div>
    </div>

</div>



<!-----------footer------------>
<footer id="footer">


    <section class="footer">

        <div class="row">

            <div class="col">
             <div class="footer_nav_title">
               <p>About BAFDO</p>
             </div>
             <div class="footer_nav">

              <a href="">Terms &  Conditions</a>
              <a href="">Privacy Policy</a> 
              <a href="">About Us</a> 
              <a href="">Return and Refund Policy</a> 
            
             </div>
            </div>

            <div class="col">
                <div class="footer_nav_title">
                    <p>Make Money With Us</p>
                  </div>
                  <div class="footer_nav">
 
                   <a href="">Start Selling Product</a>
                   <a href="">Become an Affiliate Partner</a> 
                  </div>

                  <div class="footer_img">
                    <a href=""><img class="img-fluid" src="assets/img/icon/sslcommerz.png"> </a>
                  </div>
            </div>

            <div class="col">
                <div class="footer_nav_title">
                    <p>Get To Know Us</p>
                  </div>
                  <div class="footer_nav">
 
                   <a href="">Contact Us</a>
                   <a href="">Help Center</a> 
                   <a href="">About Bafdo</a> 
                   <a href="">Return and Refund Policy</a> 
                 
                  </div>
                  <div class="footer_support">
                      <a href="">support@bafdo.com</a>
                      <a href="">+880 9785 457898</a>
                  </div>
            </div>

            <div class="col">
                <div class="footer_nav_title">
                    <p>Download The App</p>
                  </div>
                  <div class="footer_nav">
 
                   <a href=""><img class="img-fluid" src="assets/img/icon/appstore.png"></a>
                   <a href=""><img class="img-fluid" src="assets/img/icon/playstore.png"></a> 
                  </div>

                  <div class="footer_social">
                    <p>Follow us on:</p>
                    <a href=""><img class="img-fluid" src="assets/img/icon/facebook.png"></a>
                    <a href=""><img class="img-fluid" src="assets/img/icon/instragram.png"></a>
                    <a href=""><img class="img-fluid" src="assets/img/icon/linkdin.png"></a>
                    <a href=""><img class="img-fluid" src="assets/img/icon/twitter.png"></a>
                  </div>
            </div>

            <div class="col">
                <div class="footer_nav_title">
                    <p>Get Newsletter</p>
                  </div>
                  <div class="footer_nav">
 
                   <a href="">By subscribing you agree to receivw an email from us. 
                    Please read our Privacy Policy.</a>
                    
                    
                  </div>
                  <div class="footer_suscribe_newsletter">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control" placeholder="Type your email" aria-label="email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href=""><button class="btn btn-outline-secondary" type="button">Subscribe</button></a>
                        </div>
                    </div>
                  </div>
                 
            </div>

        </div>

       
    </section>
   
    <div class="copyright text-center">
            
        <P>Copyright 2021 Bafdo Limited. All Rights Reserved <a href="" class="ml-4 px-3 border-left " ><u>Terms & Conditions</u></a> <a href="" class="px-3 border-left"><u>Privacy Policy</u></a> </P>
        
        
   
</div>
</footer>



<!-- Vendor JS Files -->

<script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/myScript.js') }}"></script>
    <!-- main JS Files -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/dropdown.js') }}"></script>


</body>

</html>