<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
        body{
  height: 100vh;
  text-align: center;
}
  /*Trigger Button*/
.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #B05574, #F87E7B);
  padding: 15px 30px;
  border-radius: 30px;
  position: relative; 
  top: 50%;
}

/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#F87E7B,#B05574);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.username, .password {
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 0;
  font-weight: normal;
  background: transparent;  
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 2px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}
        </style>
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
              
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                 
                  <div class="dropdown">
                  
                   
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                    
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                     
                     </div>
                     <div class="login_menu">
                        <ul>
                        <li><a href="../../user_home">
                             
                             <span class="padding_10">Home</span></a>
                       </li>
                           <li>
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <a href="../../my_cart"> <span class="padding_10">My Cart</span>
                             
                           </li>
                           <li>
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <a href="../../user_order"> <span class="padding_10">My Orders</span>
                           
                           </a>
</li>
<li>
                           <i class="fa fa-sign-out" aria-hidden="true">
                              <a href="../../my_cart"> <span class="padding_10">Log Out</span></i>
                           
                           </a>
</li>
                          
                        </ul>
                        

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
       
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">My Orders</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                       
                           <div class="col-lg-12 col-sm-12">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{$orders->name}}</h4>
                                 <p class="price_text">Total Price  <span style="color: #262626;">₹{{$orders->price}} </span></p>
                                 <div class="tshirt_img"><img src="../../storage/products/{{$orders->image}}"></div>
                                 <div class="btn_main">
                                 <div class="border-top pt-3">
                                            <div class="row center">
                                           
                                            <lable>Quantity</lable>
                                          <input class="form-control form-control-lg center" type="number" name="quantity"  id="quantity" value="{{$orders->quantity}}" disabled  />
                                         @if($orders->status==0)
                                          <button type="submit" class="btn btn-primary">Ordered</button>
                                         @elseif($orders->status==1)
                                         <button type="submit" class="btn btn-success">Delivered</button>
                                         @endif

                                            </div>
                                        </div>
                                 </div>
                              </div>
                           </div>
                        
                          
                          
                          
                        </div>
                     </div>
                  </div>
               </div>
            
            </div>
          
            </a>
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
     
     
      <div class="footer_section layout_padding">
        
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
          
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   

   </body>
</html>