<section id="clients" class="clients section" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>همکاران</h2>
        <p>شرکت های حامی تینتک<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center" style="text-align:center">
            <div class="swiper-slide"><img src="<?= get_template_directory_uri()?>/assets/img/clients/FUM_Logo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri()?>/assets/img/clients/Picture1.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

</section>