<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id='home' class="home-banner animate__animated animate__fadeIn animate-duration-6s">
  <div class="container">
    <div class="banner-content animate__animated animate__fadeInUp animate__delay-1s">
      <div class="banner-text">
        Welcome • 欢迎
      </div>
      <div class="banner-btn">
        <div class="btn shadow-lg">
          Order Now
        </div>
      </div>
    </div>
  </div>
</section>

<section id='favorites' class="customers-favorites">
  <div class="container mb-5">
    <div class="section-header text-center pt-5 pb-2">
      <h2>Customers' Favorites</h2>
      <p class='favorites-sub-text'>Try one of our signature selections and see what everyone’s talking about.</p>
    </div>
    <div class="row favorites-dishes">
      <div class="col-12 col-sm-6 dishes-wrap wow animate__animated animate__zoomIn" data-wow-duration="0.5s">
        <div class="dishes">
          <div class="images dish1"></div>
          <div class="priceTag">$10.95</div>
          <div class="dishName">General Tso's Chicken</div>
        </div> 
      </div>
      <div class="col-12 col-sm-6 dishes-wrap wow animate__animated animate__zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
        <div class="dishes">
          <div class="images dish2"></div>
          <div class="priceTag">$11.49</div>
          <div class="dishName">Hibachi Chicken</div>
        </div> 
      </div>
      <div class="col-12 col-sm-6 dishes-wrap wow animate__animated animate__zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
        <div class="dishes">
          <div class="images dish3"></div>
          <div class="priceTag">$9.99</div>
          <div class="dishName">Sweet and Sour Chicken</div>
        </div> 
      </div>
      <div class="col-12 col-sm-6 dishes-wrap wow animate__animated animate__zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
        <div class="dishes">
          <div class="images dish4"></div>
          <div class="priceTag">$9.99</div>
          <div class="dishName">Evansville Roll</div>
        </div> 
      </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
      <div class="explore-menu-btn">
        <div class="btn shadow-lg">
          Explore our menu
        </div>
      </div>
    </div>
  </div>
</section>

<section id='about' class="home-about">
  <div class="container">
    <div class="section-header text-center py-5">
      <h2>About</h2>
      <div class="owl-carousel owl-theme owl-loaded py-5 wow animate__animated animate__fadeIn" data-wow-duration="4s">
        <div class="owl-stage-outer">
          <div class="owl-stage">
            <div class="owl-item d-flex justify-content-center">
              <img src="<?php echo get_theme_file_uri('/img/about.jpeg') ?>" alt=""  class='img-max-w'>
            </div>
            <div class="owl-item d-flex justify-content-center">
              <img src="<?php echo get_theme_file_uri('/img/about1.jpeg') ?>" alt="" class='img-max-w'>
            </div>
            <div class="owl-item d-flex justify-content-center">
              <img src="<?php echo get_theme_file_uri('/img/about2.jpeg') ?>" alt="" class='img-max-w'>
            </div>
            <div class="owl-item d-flex justify-content-center">
              <img src="<?php echo get_theme_file_uri('/img/about3.jpeg') ?>" alt="" class='img-max-w'>
            </div>
            <div class="owl-item d-flex justify-content-center">
              <img src="<?php echo get_theme_file_uri('/img/about4.jpeg') ?>" alt="" class='img-max-w'>
            </div>
          </div>
        </div>
      </div>
      <div class="about-text wow animate__animated animate__fadeInUp" data-wow-delay="0.25s" data-wow-duration=".5s">
        Lin's Asian Express is a small family owned restaurant in 
        Evansville, Indiana. We are proud to offer the highest quality 
        modern Asian cuisine at the lowest cost. From our family to yours, 
        we put a lot of love and careful attention in each item. 
        We hope you enjoy Lin's as much as we enjoy bringing it to you.
      </div>
    </div>
  </div>
</section>

<section id='location' class="home-location-hours">
  <div class="container">
    <div class="section-header text-center py-5">
      <h2> Location & Hours</h2>
      <script>
        function initMap() {
          var location ={lat: 37.9829432, lng : -87.5760487};
          var map = new google.maps.Map(document.getElementById("map"),{
              zoom: 16,
              center: location
          });
          var marker = new google.maps.Marker({
            position: location,
            map: map
          })
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9gOtwLdx0wpfVxIDY-tqLoC4tOr8U9og&callback=initMap"></script>
      <div class="container">
        <div id="map" class='my-5 wow animate__animated animate__fadeIn' data-wow-duration="4s"></div>
        <div class="row">
          <div class="col-12 col-md-6 contact-address wow animate__animated animate__fadeInUp">
            <h4>
              Lin Asian Express
            </h4>
            <div> 
              520 N First Ave <br>
              EVANSVILLE, Indiana 47710<br>
              <p class='mb-0'>+18129094210 </p>
              <p class='mb-0'>linsasianexpress@gmail.com</p>
            </div>
            <div class="get-directions-btn">
              <button class='btn'>Get directions</button>
            </div>
           
          </div>
          <div class="col-12 col-md-6 contact-openhours wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
            <p class='Monday'>Monday 10:30 am - 9:00 pm</p>
            <p class='Tuesday'>Tuesday 10:30 am - 9:00 pm</p>
            <p class='Wednesday'>Wednesday 10:30 am - 9:00 pm</p>
            <p class='Thursday'>Thursday 10:30 am - 9:00 pm</p>
            <p class='Friday'>Friday 10:30 am - 9:00 pm</p>
            <p class='Saturday'>Saturday 10:30 am - 9:00 pm</p>
            <p class='Sunday'>Sunday Closed</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id='contact' class="home-contact-us">
  <div class="container">
    <div class="section-header text-center py-5">
      <h2>Contact Us</h2>
      <div class="contact-from wow animate__animated animate__fadeIn" data-wow-duration="4s">
        <div class="contact-content py-5">
          <h4>GET IN TOUCH</h4>
          <p>Tell us the details below.</p>
            <form class="px-5 pt-3">
              <div class="form-group">
                <input type="text" class="form-control  py-4" placeholder="Full name">
              </div>

              <div class="form-group">
                <input type="email" class="form-control py-4" placeholder="Email">
              </div>
    
              <div class="form-group">
                <textarea class="form-control" placeholder="Message" rows="5"></textarea>
              </div>
             
              <button type="submit" class='submit-form-btn btn'>Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
