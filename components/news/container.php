
    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
    <div class="container">
        <?php
        // کوئری برای پر بازدیدترین پست
        $args = [
            'post_type' => 'post',
            'meta_key' => 'view',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'posts_per_page' => 1,
        ];
        $popular_query = new WP_Query($args);

        if ($popular_query->have_posts()) {
            while ($popular_query->have_posts()) {
                $popular_query->the_post();
                $views = get_post_meta(get_the_ID(), 'view', true);
                ?>
                <article class="article">
                  <h2 class="title"><?php the_title(); ?></h2>
                    <div class="post-img">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                    </div>


                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php the_permalink(); ?>"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo convert_gregorian_to_persian(get_the_date('Y-m-d')); ?></time></a></li>
                        </ul>
                    </div><!-- End meta top -->

                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                    <div class="meta-bottom">
                        <p>تعداد بازدید: <?php echo esc_html($views); ?></p>
                    </div>
                </article>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<p>هیچ پستی یافت نشد.</p>';
        }
        ?>
    </div>
</section>

<!--           
          <section id="blog-author" class="blog-author section">

            <div class="container">
              <div class="author-container d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                    <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div>
            </div>

          </section> -->

          
          <!-- <section id="blog-comments" class="blog-comments section">

            <div class="container">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div>

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan,2022</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

              <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                      Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                  </div>
                </div>

              </div>

              <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                  </div>
                </div>

              </div>

            </div>

          </section> -->

       
          <!-- <section id="comment-form" class="comment-form section">
            <div class="container">

              <form action="">

                <h4>Post Comment</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </div>

              </form>

            </div>
          </section> -->

        </div>

       
          <div class="col-lg-4 sidebar">
            <div class="widgets-container">
              <div class="search-widget widget-item">

              <h3 class="widget-title">جستجو</h3>
              <form action="">
                <input type="text">
                <button type="submit" title="Search" style="right:85%"><i class="bi bi-search"></i></button>
              </form>

            </div>
              <div class="recent-posts-widget widget-item">
                <h3 class="widget-title">پست های پربازدید</h3>
                <?php
                // تنظیمات کوئری برای دریافت پست‌های دسته‌بندی "جلسات دورهمی"
                $query_args = [
                    'category_name' => 'جلسات-دورهمی', // نام دسته‌بندی به فارسی
                    'meta_key'     => 'view', // کاستوم فیلد تعداد بازدید
                    'orderby'      => 'meta_value_num',
                    'order'        => 'DESC',
                    'posts_per_page' => 5, // تعداد پست‌ها
                ];

                $query = new WP_Query($query_args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $post_date = get_post_meta(get_the_ID(), 'date', true); // دریافت تاریخ از کاستوم فیلد
                        ?>
                        <div class="post-item">
                          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" class="flex-shrink-0" style="padding-left: 1rem;width:95px">
                          <div>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo convert_gregorian_to_persian(get_the_date('Y-m-d')); ?></time>
                          </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>پستی یافت نشد.</p>';
                }
                ?>
              </div>
            </div>
          </div>


      </div>
    </div>
