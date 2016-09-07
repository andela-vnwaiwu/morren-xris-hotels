<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel.carousel-slider').carousel({
      full_width: true,
      indicators: true
    });
    autoplay();
    function autoplay () {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
    }
  });
</script>
<main>
  <div class="container">
    <div class="row">
      <div class="carousel carousel-slider">
        <div class="carousel-item"><img src="images/about-carousel/bar1.jpg"></div>
        <div class="carousel-item"><img src="images/about-carousel/food-1.jpg"></div>
        <div class="carousel-item"><img src="images/about-carousel/hotel-room-1.jpg"></div>
        <div class="carousel-item"><img src="images/about-carousel/pool-side-1.jpg"></div>
      </div>
    </div>
    <div class="row">
      <h3 class="text-justify"> About Morren-Xris</h3>
      <p class="text-justify flow-text">
        <strong>Morren-Xris</strong>... for your comfort and relaxation.
      </p>
      <p class="text-justify flow-text">
        Iconic, stylish and sophisticated, Morren-Xris creates an excitingly individual experience for its guests. 
        We delight in providing our guests with a genuine and inviting ambiance. We create excitement with our stunning, leading edge design.
        And we strive to engage each and every guest through our innovative and very relevant range of holistic facilities and services, such as swimming pool, gym, a nice bar and also fast free Internet. It is all neatly packaged together with our unique service ethos and your 100% Satisfaction Guaranteed.
      </p>
      <p class="text-justify flow-text">
        <strong>Morren-Xris </strong>is a world class hotel located in Onitsha, one of the commercial cities of the south-east.
            It is a 5-star hotel offering quality and value added sevices. Its facilities are world-class and it is a 
            home away from home. It is uniquely situated to access dynamic major cities routes and is in the most sought after leisure hotspots of the state.
            It’s a perfect equation that adds up to a highly individual - and unforgettable – 360° hospitality experience.
      </p>
      <p class="flow-text">
        <strong>Morren-Xris</strong>...Your comfort is our goal!.
      </p>
    </div>
  </div>
  <section id="about-footer">
    <div class="container">
      <div class="row">
        <div id="testimonial">
          <blockquote>
            Morren-Xris is the place to be...right from when you step your feet into their premises. You will be treated like a king.<br/> 
            Their staffs are always cheeful and willing to help you settle in quickly. Anytime i am visiting around that area I lodge there.<br/>
            Excellent services
            <br/><span class="small-quote">Mr. Ikenna Okoye</span>
          </blockquote>
        </div>
      </div>
    </div>
  </section>
</main>
