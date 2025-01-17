<?php
$inDir = get_template_directory_uri();
?>
 </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter" style="display: none;">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">تینتک</span>
          </a>
          <div class="footer-contact pt-3">
            <p>ایران ، خراسان رضوی ، مشهد</p>
            <p>هنرستان سمپاد امیرکبیر</p>
            <p class="mt-3"><strong>تلفن:</strong> <span>989397759440+</span></p>
            <p><strong>ایمیل:</strong> <span>tintak.business@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links" style="display: none;">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links" style="display: none;">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-8 col-md-12">
          <h4>مارا دنبال کنید.</h4>
          <p>اگر می خواین راحت از تمام فعالیت های ما با خبر بشنی ما رو توی شبکه های اجتماعی دنبال کنید.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">tintak</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=$inDir?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$inDir?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=$inDir?>/assets/vendor/aos/aos.js"></script>
  <script src="<?=$inDir?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$inDir?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=$inDir?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=$inDir?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$inDir?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=$inDir?>/assets/js/main.js"></script>

</body>

</html>