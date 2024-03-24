<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="footer-left">
        <div>
          <img src="/app/uploads/2023/01/OptimaPropertyAdvisors_RGB_Logo_Negative-1-1.svg" alt="optima">
          <p>exclusive excellence</p>
        </div>
        <div>
          <div class="contact">
                  <a href="tel:+61411566574"> +61 411 566 574</a>
                  <a href="mailto:enquiries@optimaproperty.com.au">enquiries@optimaproperty.com.au</a>
              <div class="socials">
                <a href="#"><img src="/app/uploads/2023/01/insta.svg" alt="instagram"></a>
                <a href="#"><img src="/app/uploads/2023/01/fb.svg" alt="facebook"></a>
                <a href="#"><img src="/app/uploads/2023/01/linkedin.svg" alt="linkedin"></a>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="footer-right">
            <div>
              <img src="/app/uploads/2023/01/REINSW_member-2.svg" alt="optima">    
              <img src="/app/uploads/2023/01/rebaa-accredited-black-tagline-small-3-1.svg" alt="optima">
            </div>
          <p>&copy; OPTIMA PROPERTY ADVISORS Optima Properties Advisors holds<br>Real Estate License #10096613 through the NSW Office of Fair Trading.</p>
        </div>
      </div>
  </div>
</div>

</footer>


<script>
  /* testimonial slider */
  var $ = jQuery; 
  
  function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());
  
  </script>

<!-- change nav color if portfolio page & logo-->

<?php if (is_singular( $post_types = 'portfolio' ) || is_archive() || in_category(array( 'testimonial', 'articles' ))) { ?>
  <script> 
        
        document.querySelector(".navbar-brand img").src="/app/uploads/2023/02/Green-Logo.svg";

        const nav = document.querySelectorAll('header nav #main-menu ul li a');
  
         nav.forEach(element => {
         element.style.color="#084D3B40";
        })


  </script>
<?php } ?>

<?php if (is_front_page()) { ?>
<script>

window.addEventListener("scroll", function() {

  const nav = document.querySelectorAll('header nav #main-menu ul li a');
    
  if (window.scrollY > 5000) {

        nav.forEach(element => {
         element.style.color="#084D3B40";
        })

        document.querySelector(".navbar-brand img").src="/app/uploads/2023/02/Green-Logo.svg";

    } else {

       nav.forEach(element => {
         element.style.color="#fff";
        })

      document.querySelector(".navbar-brand img").src="https://optima.zulu.nichestudio.biz/app/uploads/2023/01/Optima-Logo.svg";
    }
});
</script>


<?php } ?>





<script>src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>
<script>src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js">



<script>

if ( $(window).width() > 992 ) { 

  var controller = new ScrollMagic.Controller();

  var scrollHorizontal = new TimelineLite()
    scrollHorizontal.to("#scrollHorizontal", 1, {x:'-270%'})

  var horizontalScroll = new ScrollMagic.Scene({
        triggerElement: "#scrollHorizontal",
        triggerHook: 'onLeave',
        duration: 3000
      }).setPin("#scrollHorizontal").setTween(scrollHorizontal).addTo(controller);


  var controller2 = new ScrollMagic.Controller();

  var scrollHorizontal2 = new TimelineLite()
    scrollHorizontal2.to("#contact-ryan", 1, {x:'-100%'})

  var horizontalScroll2 = new ScrollMagic.Scene({
        triggerElement: "#contact-ryan",
        triggerHook: 'onLeave',
        duration: 3000
      }).setPin("#contact-ryan").setTween(scrollHorizontal2).addTo(controller2);w   

}
</script>



<?php 

if (!is_front_page()) {
  
  echo "
  <script>
    const url = window.location.origin
      document.querySelector('#menu-menu li:first-of-type a').href=url+'/#what-we-do'; 
      document.querySelector('#menu-menu li:nth-of-type(2) a').href=url+'/#portfolio'; 
      document.querySelector('#menu-menu li:nth-of-type(3) a').href=url+'/#meet-ryan';
      document.querySelector('#menu-menu li:nth-of-type(4) a').href=url+'/#contact';
      document.querySelector('#menu-menu li:nth-of-type(5) a').href=url+'/#faq';
  </script>
 " ;
  
} return;

?>

