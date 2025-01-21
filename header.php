<?php
$inDir = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>تینتک! </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?=$inDir?>/assets/img/logo.png" rel="icon">
  <link href="<?=$inDir?>/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=$inDir?>/assets/vendor/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="<?=$inDir?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=$inDir?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=$inDir?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=$inDir?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=$inDir?>/assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">
  
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?=$inDir?>/assets/img/logo.png" alt="">
        <h1 class="sitename">تینتک</h1>
      </a>



<nav id="navmenu" class="navmenu mx-auto text-center" style="text-align: center;">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'navbar',
        'menu_class'     => 'justify-content-center g-1', // کلاس‌های CSS برای ul
        'container'      => false, // از div پیش‌فرض دور منو جلوگیری می‌کند
        'fallback_cb'    => false, // اگر منو تنظیم نشده بود، چیزی نمایش نمی‌دهد
    ));
    ?>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>




      <a class="btn-getstarted flex-md-shrink-0" href="">همین الان شروع کن</a>

    </div>
  </header>

  <main class="main">