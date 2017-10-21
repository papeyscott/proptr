<footer class="footer">
    <div class="container">
        
          <div class="inner-footer">
          <div class="row">
            <div class="col-sm-5">
            <h2>About Us</h2>
            <p>Proptr is a Secure Property Management and Service Providers Networking platform that enables Property Owners, Managers, manage their properties from a central location and a platform for hiring service providers in the real estate industry across the Globe.</p>
            
            </div>
            <div class="col-sm-3">
            <h2>Our Company</h2>
            <ul class="links">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Private Policy</a></li>
                <li><a href="#">Disclaimer Policy</a></li>
                <li><a href="#">Frequently Asked Questions (FAQ)</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
              </ul>
                           
               
            </div>
        
            <div class="col-sm-4">
                <h2>Our Newsletter</h2>
                <p>Subscribe to our Newsletter and get updates about Real Esate Globally.</p>
                <form class="newslatter">
                    <input type="text" placeholder="Opt In Email" />
                    <button class="submit-newslatter" value="Subscribe"><i class="fa fa-paper-plane" aria-hidden="true"></i> Subscribe</button>
                </form>
            </div>
            </div>
            <div class="row pad-top">
    <div class="col-sm-5">
        <div class="inner-soc">
            <h2>Follow Us</h2>
            <ul class="footer-social">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
        <div class="col-sm-3">
          <h2>We Accept</h2>
             <img src="{{ asset('src/images/payment.png') }}">
       </div>
        </div>
    </div>
    
    

</div>
    
    
    <div class="copyright">
    <div class="container">
    <div class="col-sm-8"><p>(c) 2017. All Rights Reserved. A Property of Properites Tracker & Managment Services Inc. Delaware, USA</p></div>
    <div class="col-sm-4">
    <ul class="copy-links">        
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">English (US)</a></li>
                </ul>
                </div>
    </div>
    
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('src/js/bootstrap.js" type="text/javascript') }}"></script>
<script src="{{ asset('src/js/easy-responsive-tabs.js') }}" type="text/javascript"></script>
<script src="{{ asset('src/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('src/js/custom.js') }}" type="text/javascript"></script>


<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
  
   $('#horizontalTab').easyResponsiveTabs();
  
});
</script>
<script>
$('.feature-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        }
        ,
        500:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.partner-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})



</script>
