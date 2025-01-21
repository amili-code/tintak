<?php $inDir = get_template_directory_uri() ;?>

<section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

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
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                    <img src="<?=$inDir?>/assets/img/vision/3.webp" alt="">
                </div>
                
                <div class="swiper-slide">
                    <img src="<?=$inDir?>/assets/img/vision/4.webp" alt="">
                </div>
                
                <div class="swiper-slide">
                    <img src="<?=$inDir?>/assets/img/vision/one.webp" alt="">
                </div>
                
                <div class="swiper-slide">
                    <img src="<?=$inDir?>/assets/img/vision/two.webp" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
           
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                <h2>چشم انداز باشگاه تینتک</h2>
                <p style="text-align: justify;">در راستای فرمایشات مقام معظم رهبری و سند هوش مصنوعی کشور باشگاه کارآفرینان نوجوانان هوش مصنوعی تینتک با محوریت کارآفرینی و هوش مصنوعی و استفاده حداکثری از ظرفیت های دانش آموزان کشور راه اندازی گردید است .</p>
                <hr>
                <p style="text-align: justify;">

                    باشگاه کارآفرینان نوجوان تینتک در نظر دارد ،در افق ۱۴۱۲ هجری شمسی، با هدف استقرار و راه اندازی باشگاه در کلیه استان های کشور با برخورداری از زیست‌بوم هوش مصنوعی پیشرفته و نوآور مبتنی بر کارآفرینی و هوش مصنوعی ، اتکا بر قابلیت‌ها و توانمندی‌های ملی و بهره‌گیری هوشمندانه از نوجوانان و با حضور در رویدادها و تعاملات جهانی، بین ۱۰ کشور پیشرو هوش مصنوعی در تولید محتوا قرار گیرد و با استفاده از این فناوری در حکمرانی، ثروت‌آفرینی، ارزش‌آفرینی و کارآفرینی اثر گذار و موثر باشد.             
                </p>
            </div>
          </div>

        </div>

      </div>

    </section>