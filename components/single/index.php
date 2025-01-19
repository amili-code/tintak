
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
              <br>
              <h1>اخبار تینتک</h1>
              <p class="mb-0">شما می تونین با این صفحه از ریز جزییات فعالیت های گروه مطلع و با خبر بشین</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">صفحه اصلی</a></li>
            <li class="current">اخبار</li>
          </ol>
        </div>
      </nav>
    </div>




    <div class="container">
    <div class="row">

        <div class="col-lg-8">

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            $views = get_post_meta(get_the_ID(), 'view', true);
                            ?>
                            <article class="article">
                                <h2 class="title"><?php the_title(); ?></h2>
                                <div class="post-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                </div>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                                            <a href="<?php the_permalink(); ?>">
                                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                                    <?php echo convert_gregorian_to_persian(get_the_date('Y-m-d')); ?>
                                                </time>
                                            </a>
                                        </li>
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
                    } else {
                        echo '<p>هیچ پستی یافت نشد.</p>';
                    }
                    ?>
                </div>
            </section>
            
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
