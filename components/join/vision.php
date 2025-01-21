<section id="service-details" class="service-details section">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-box">
          <h4>مراحل عضویت</h4>
          <div class="services-list">
            <a href="#step1" data-id="1" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-1-circle"></i><span>پرکردن فرم درخواست عضویت</span></a>
            <a href="#step2" data-id="2" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-2-circle"></i><span>مصاحبه حضوری</span></a>
            <a href="#step3" data-id="3" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-3-circle"></i><span>اخذ گواهی صلاحیت حرفه ای</span></a>
            <a href="#step4" data-id="4" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-4-circle"></i><span>امضای منشور اخلاقی باشگاه</span></a>
            <a href="#step5" data-id="5" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-5-circle"></i><span>پر‌کردن رضایت نامه توسط اولیا</span></a>
            <a href="#step6" data-id="6" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-6-circle"></i><span>مصاحبه نهایی</span></a>
            <a href="#step7" data-id="7" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-7-circle"></i><span>عقد توافق نامه همکاری</span></a>
            <a href="#step8" data-id="8" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-8-circle"></i><span>حضور در یکی از تیم های باشگاه</span></a>
            <a href="#step9" data-id="9" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-9-circle"></i><span>شروع دوره آموزشی</span></a>
            <a href="#step10" data-id="10" class="service-link"><i style="position:relative;left:.5rem" class="bi bi-award-fill"></i><span>کسب درآمد از اجرای پروژه انجام شده</span></a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
        <h3 id="service-title">Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
        <p id="service-description">
          Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
        </p>
        <ul id="service-steps">
          <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
        </ul>
        <p id="service-more-info">
          Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
        </p>
        <div id="navigation-buttons" class="mt-4" style="text-align:center;">
          <button id="prev-button" class="btn btn-primary" style="display: none;">مرحله قبلی</button>
          <button id="next-button" class="btn btn-primary">مرحله بعدی</button>
        </div>
        <div class="service-box" style="margin-top:2rem">
          <h4>دانلود</h4>
          <div class="download-catalog">
            <a target="_blank" href="<?=get_template_directory_uri()?>/assets/pdf/darkhast.pdf"><i style="left: 0.5rem;position: relative;" class="bi bi-filetype-pdf"></i><span>فرم درخواست عضویت</span></a>
            <a target="_blank" href="<?=get_template_directory_uri()?>/assets/pdf/manshor.pdf"><i style="left: 0.5rem;position: relative;" class="bi bi-filetype-pdf"></i><span>منشور اخلاقی</span></a>
          </div>
        </div><!-- End Services List -->
  
        <div class="help-box d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-headset help-icon"></i>
          <h4>هنوز چیزی برات نا مفهومه؟</h4>
          <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>989397759440+</span></p>
          <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">tintak.business@gmail.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    // تابعی برای تغییر محتوای صفحه با توجه به هَش
    function updateContentFromHash() {
      const hash = window.location.hash; // خواندن هَش از URL
      const serviceLinks = document.querySelectorAll('.service-link');
      
      // انتخاب تگ‌های مختلف برای تغییر محتوا
      const titleElement = document.getElementById('service-title');
      const descriptionElement = document.getElementById('service-description');
      const stepsElement = document.getElementById('service-steps');
      const moreInfoElement = document.getElementById('service-more-info');

      // محتوای مراحل
      const stepsData = {
       '#step1': {
          title: "پرکردن فرم درخواست عضویت",
          description: "برای عضویت در باشگاه، ابتدا باید فرم درخواست عضویت را با دقت پر کنید. این فرم شامل اطلاعات اولیه شماست که برای شروع مراحل بعدی ضروری است.",
          steps: ["مرحله 1: وارد کردن اطلاعات شخصی.", "مرحله 2: انتخاب نوع عضویت."],
          moreInfo: "فرم عضویت به شما کمک می‌کند که در اولین گام، اطلاعات ضروری را وارد کنید. این اطلاعات برای پردازش سریع‌تر درخواست شما مورد استفاده قرار می‌گیرد."
        },
        '#step2': {
          title: "مصاحبه حضوری",
          description: "در این مرحله، برای آشنایی بیشتر و ارزیابی توانمندی‌هایتان، یک مصاحبه حضوری با شما برگزار می‌شود. هدف ما شناخت بیشتر از شماست.",
          steps: ["مرحله 1: حضور به موقع در محل مصاحبه.", "مرحله 2: پاسخ دادن به سوالات و معرفی خود."],
          moreInfo: "مصاحبه حضوری فرصتی است برای اینکه بیشتر با شما آشنا شویم. این مرحله به شما کمک می‌کند تا در محیط باشگاه احساس راحتی کنید."
        },
        '#step3': {
          title: "اخذ گواهی صلاحیت حرفه ای",
          description: "بعد از مصاحبه حضوری و تایید صلاحیت اولیه، گواهی صلاحیت حرفه‌ای شما صادر می‌شود. این گواهی یکی از مدارک اصلی برای ادامه مراحل بعدی است.",
          steps: ["مرحله 1: ارسال مدارک لازم.", "مرحله 2: بررسی و تایید مدارک."],
          moreInfo: "گواهی صلاحیت حرفه‌ای، نشان‌دهنده توانمندی شما در حوزه مورد نظر است. این مدرک به شما کمک می‌کند که بتوانید در مراحل بعدی باشگاه شرکت کنید."
        },
        '#step4': {
          title: "امضای منشور اخلاقی باشگاه",
          description: "در این مرحله، شما به عنوان عضوی از باشگاه باید منشور اخلاقی باشگاه را امضا کنید. این منشور اصول و ارزش‌های باشگاه را مشخص می‌کند.",
          steps: ["مرحله 1: مطالعه دقیق منشور.", "مرحله 2: امضای رسمی منشور اخلاقی."],
          moreInfo: "این منشور بر پایه اصول اخلاقی و حرفه‌ای بنا شده است و به شما کمک می‌کند که در محیطی دوستانه و حرفه‌ای فعالیت کنید."
        },
        '#step5': {
          title: "پر‌کردن رضایت نامه توسط اولیا",
          description: "در این مرحله، اولیا باید رضایت‌نامه‌ای را امضا کنند که نشان‌دهنده موافقت آنها با عضویت شما در باشگاه است.",
          steps: ["مرحله 1: ارسال رضایت‌نامه به اولیا.", "مرحله 2: دریافت و ثبت امضا."],
          moreInfo: "این مرحله به‌منظور اطمینان از رضایت اولیا است و برای امنیت و رفاه شما ضروری است."
        },
        '#step6': {
          title: "مصاحبه نهایی",
          description: "پس از تکمیل تمامی مراحل، یک مصاحبه نهایی برگزار می‌شود تا نهایی‌ترین ارزیابی‌ها انجام گیرد.",
          steps: ["مرحله 1: آماده‌سازی برای مصاحبه نهایی.", "مرحله 2: حضور در مصاحبه نهایی."],
          moreInfo: "این مصاحبه به‌منظور ارزیابی نهایی شما در باشگاه است. در این مرحله شما می‌توانید بیشتر در مورد آینده و پروژه‌ها صحبت کنید."
        },
        '#step7': {
          title: "عقد توافق نامه همکاری",
          description: "در این مرحله، توافق‌نامه‌ای رسمی با باشگاه امضا می‌کنید که شرایط همکاری و نقش شما را تعیین می‌کند.",
          steps: ["مرحله 1: بررسی شرایط همکاری.", "مرحله 2: امضای قرارداد."],
          moreInfo: "توافق‌نامه همکاری مهم‌ترین مرحله در شروع فعالیت‌های شما در باشگاه است. این توافق‌نامه چارچوب همکاری شما را مشخص می‌کند."
        },
        '#step8': {
          title: "حضور در یکی از تیم های باشگاه",
          description: "بعد از امضای توافق‌نامه، شما وارد یکی از تیم‌های باشگاه خواهید شد و به جمع خانواده بزرگ ما می‌پیوندید.",
          steps: ["مرحله 1: انتخاب تیم مورد نظر.", "مرحله 2: همکاری و مشارکت در پروژه‌ها."],
          moreInfo: "تیم‌های باشگاه به شما این فرصت را می‌دهند که توانمندی‌های خود را در عمل به نمایش بگذارید و پروژه‌های جذاب را انجام دهید."
        },
        '#step9': {
          title: "شروع دوره آموزشی",
          description: "با شروع دوره‌های آموزشی، مهارت‌های شما تقویت می‌شود و به‌طور حرفه‌ای وارد عرصه فعالیت می‌شوید.",
          steps: ["مرحله 1: ثبت‌نام در دوره‌ها.", "مرحله 2: شرکت فعال در کلاس‌ها."],
          moreInfo: "دوره‌های آموزشی ما به‌گونه‌ای طراحی شده‌اند که تمام نیازهای حرفه‌ای شما را پوشش دهند. در این دوره‌ها شما مهارت‌های عملی را فرا خواهید گرفت."
        },
        '#step10': {
          title: "کسب درآمد از اجرای پروژه انجام شده",
          description: "حالا شما می‌توانید از پروژه‌هایی که انجام داده‌اید، درآمد کسب کنید و تجربه‌های خود را در دنیای واقعی به کار ببرید.",
          steps: ["مرحله 1: شناسایی پروژه‌های قابل انجام.", "مرحله 2: انجام پروژه‌ها و کسب درآمد."],
          moreInfo: "کسب درآمد از پروژه‌ها، مرحله‌ای است که شما می‌توانید توانمندی‌های خود را در عمل نشان دهید و از آن بهره‌برداری کنید."
        },
        // می‌توانید سایر مراحل را اضافه کنید...
      };

      // اگر هَش معتبر است، محتوای آن را به‌روزرسانی کن
      if (stepsData[hash]) {
        const data = stepsData[hash];
        titleElement.textContent = data.title;
        descriptionElement.textContent = data.description;
        moreInfoElement.textContent = data.moreInfo;

        // لیست مراحل
        stepsElement.innerHTML = "";
        data.steps.forEach(step => {
          const li = document.createElement('li');
          li.innerHTML = `<i class="bi bi-check-circle"></i> <span>${step}</span>`;
          stepsElement.appendChild(li);
        });

        // فعال‌سازی لینک انتخاب شده
        serviceLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === hash) {
            link.classList.add('active');
          }
        });
      }
    }

    // هنگام بارگذاری صفحه یا تغییر هَش، محتوای مناسب را نشان بده
    updateContentFromHash();

    // وقتی روی یکی از مراحل کلیک شد، هَش را تغییر بده و محتوای جدید رو بارگذاری کن
    const serviceLinks = document.querySelectorAll('.service-link');
    serviceLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const hash = link.getAttribute('href');
        window.location.hash = hash; // تغییر هَش در URL
        updateContentFromHash(); // به‌روزرسانی محتوا
      });
    });
  });
</script> -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    window.location.hash = `#step1`;
  // تابعی برای تغییر محتوای صفحه با توجه به هَش
  function updateContentFromHash() {
    const hash = window.location.hash || '#step1'; 
    const serviceLinks = document.querySelectorAll('.service-link');
    
    // انتخاب تگ‌های مختلف برای تغییر محتوا
    const titleElement = document.getElementById('service-title');
    const descriptionElement = document.getElementById('service-description');
    const stepsElement = document.getElementById('service-steps');
    const moreInfoElement = document.getElementById('service-more-info');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    
    // محتوای مراحل
    const stepsData = {
      '#step1': {
        title: "پرکردن فرم درخواست عضویت",
        description: "برای عضویت در باشگاه، ابتدا باید فرم درخواست عضویت را با دقت پر کنید. این فرم شامل اطلاعات اولیه شماست که برای شروع مراحل بعدی ضروری است.",
        steps: ["مرحله 1: وارد کردن اطلاعات شخصی.", "مرحله 2: انتخاب نوع عضویت."],
        moreInfo: "فرم عضویت به شما کمک می‌کند که در اولین گام، اطلاعات ضروری را وارد کنید. این اطلاعات برای پردازش سریع‌تر درخواست شما مورد استفاده قرار می‌گیرد."
      },
      '#step2': {
        title: "مصاحبه حضوری",
        description: "در این مرحله، برای آشنایی بیشتر و ارزیابی توانمندی‌هایتان، یک مصاحبه حضوری با شما برگزار می‌شود. هدف ما شناخت بیشتر از شماست.",
        steps: ["مرحله 1: حضور به موقع در محل مصاحبه.", "مرحله 2: پاسخ دادن به سوالات و معرفی خود."],
        moreInfo: "مصاحبه حضوری فرصتی است برای اینکه بیشتر با شما آشنا شویم. این مرحله به شما کمک می‌کند تا در محیط باشگاه احساس راحتی کنید."
      },
      '#step3': {
        title: "اخذ گواهی صلاحیت حرفه ای",
        description: "بعد از مصاحبه حضوری و تایید صلاحیت اولیه، گواهی صلاحیت حرفه‌ای شما صادر می‌شود. این گواهی یکی از مدارک اصلی برای ادامه مراحل بعدی است.",
        steps: ["مرحله 1: ارسال مدارک لازم.", "مرحله 2: بررسی و تایید مدارک."],
        moreInfo: "گواهی صلاحیت حرفه‌ای، نشان‌دهنده توانمندی شما در حوزه مورد نظر است. این مدرک به شما کمک می‌کند که بتوانید در مراحل بعدی باشگاه شرکت کنید."
      },
      '#step4': {
        title: "امضای منشور اخلاقی باشگاه",
        description: "در این مرحله، شما به عنوان عضوی از باشگاه باید منشور اخلاقی باشگاه را امضا کنید. این منشور اصول و ارزش‌های باشگاه را مشخص می‌کند.",
        steps: ["مرحله 1: مطالعه دقیق منشور.", "مرحله 2: امضای رسمی منشور اخلاقی."],
        moreInfo: "این منشور بر پایه اصول اخلاقی و حرفه‌ای بنا شده است و به شما کمک می‌کند که در محیطی دوستانه و حرفه‌ای فعالیت کنید."
      },
      '#step5': {
        title: "پر‌کردن رضایت نامه توسط اولیا",
        description: "در این مرحله، اولیا باید رضایت‌نامه‌ای را امضا کنند که نشان‌دهنده موافقت آنها با عضویت شما در باشگاه است.",
        steps: ["مرحله 1: ارسال رضایت‌نامه به اولیا.", "مرحله 2: دریافت و ثبت امضا."],
        moreInfo: "این مرحله به‌منظور اطمینان از رضایت اولیا است و برای امنیت و رفاه شما ضروری است."
      },
      '#step6': {
        title: "مصاحبه نهایی",
        description: "پس از تکمیل تمامی مراحل، یک مصاحبه نهایی برگزار می‌شود تا نهایی‌ترین ارزیابی‌ها انجام گیرد.",
        steps: ["مرحله 1: آماده‌سازی برای مصاحبه نهایی.", "مرحله 2: حضور در مصاحبه نهایی."],
        moreInfo: "این مصاحبه به‌منظور ارزیابی نهایی شما در باشگاه است. در این مرحله شما می‌توانید بیشتر در مورد آینده و پروژه‌ها صحبت کنید."
      },
      '#step7': {
        title: "عقد توافق نامه همکاری",
        description: "در این مرحله، توافق‌نامه‌ای رسمی با باشگاه امضا می‌کنید که شرایط همکاری و نقش شما را تعیین می‌کند.",
        steps: ["مرحله 1: بررسی شرایط همکاری.", "مرحله 2: امضای قرارداد."],
        moreInfo: "توافق‌نامه همکاری مهم‌ترین مرحله در شروع فعالیت‌های شما در باشگاه است. این توافق‌نامه چارچوب همکاری شما را مشخص می‌کند."
      },
      '#step8': {
        title: "حضور در یکی از تیم های باشگاه",
        description: "بعد از امضای توافق‌نامه، شما وارد یکی از تیم‌های باشگاه خواهید شد و به جمع خانواده بزرگ ما می‌پیوندید.",
        steps: ["مرحله 1: انتخاب تیم مورد نظر.", "مرحله 2: همکاری و مشارکت در پروژه‌ها."],
        moreInfo: "تیم‌های باشگاه به شما این فرصت را می‌دهند که توانمندی‌های خود را در عمل به نمایش بگذارید و پروژه‌های جذاب را انجام دهید."
      },
      '#step9': {
        title: "شروع دوره آموزشی",
        description: "با شروع دوره‌های آموزشی، مهارت‌های شما تقویت می‌شود و به‌طور حرفه‌ای وارد عرصه فعالیت می‌شوید.",
        steps: ["مرحله 1: ثبت‌نام در دوره‌ها.", "مرحله 2: شرکت فعال در کلاس‌ها."],
        moreInfo: "دوره‌های آموزشی ما به‌گونه‌ای طراحی شده‌اند که تمام نیازهای حرفه‌ای شما را پوشش دهند. در این دوره‌ها شما مهارت‌های عملی را فرا خواهید گرفت."
      },
      '#step10': {
        title: "کسب درآمد از اجرای پروژه انجام شده",
        description: "حالا شما می‌توانید از پروژه‌هایی که انجام داده‌اید، درآمد کسب کنید و تجربه‌های خود را در دنیای واقعی به کار ببرید.",
        steps: ["مرحله 1: شناسایی پروژه‌های قابل انجام.", "مرحله 2: انجام پروژه‌ها و کسب درآمد."],
        moreInfo: "کسب درآمد از پروژه‌ها، مرحله‌ای است که شما می‌توانید توانمندی‌های خود را در عمل نشان دهید و از آن بهره‌برداری کنید."
      },
    };

    // اگر هَش معتبر است، محتوای آن را به‌روزرسانی کن
    if (stepsData[hash]) {
      const data = stepsData[hash];
      titleElement.textContent = data.title;
      descriptionElement.textContent = data.description;
      moreInfoElement.textContent = data.moreInfo;

      // لیست مراحل
      stepsElement.innerHTML = "";
      data.steps.forEach(step => {
        const li = document.createElement('li');
        li.innerHTML = `<i class="bi bi-check-circle"></i> <span>${step}</span>`;
        stepsElement.appendChild(li);
      });

      // فعال‌سازی لینک انتخاب شده
      serviceLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === hash) {
          link.classList.add('active');
        }
      });

      // بروزرسانی وضعیت دکمه‌ها
      const currentStep = parseInt(hash.replace('#step', ''), 10);

      // دکمه مرحله قبلی
      if (currentStep === 1) {
        prevButton.style.display = 'none';
      } else {
        prevButton.style.display = 'inline-block';
      }

      // دکمه مرحله بعدی
      if (currentStep === 10) {
        nextButton.style.display = 'none';
      } else {
        nextButton.style.display = 'inline-block';
      }
    }
  }

  // هنگام بارگذاری صفحه یا تغییر هَش، محتوای مناسب را نشان بده
  updateContentFromHash();

  // وقتی روی یکی از مراحل کلیک شد، هَش را تغییر بده و محتوای جدید رو بارگذاری کن
  const serviceLinks = document.querySelectorAll('.service-link');
  serviceLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const hash = link.getAttribute('href');
      window.location.hash = hash; // تغییر هَش در URL
      updateContentFromHash(); // به‌روزرسانی محتوا
    });
  });

  // دکمه مرحله قبلی
  const prevButton = document.getElementById('prev-button');
  prevButton.addEventListener('click', function () {
    const currentStep = parseInt(window.location.hash.replace('#step', ''), 10);
    if (currentStep > 1) {
      window.location.hash = `#step${currentStep - 1}`;
      updateContentFromHash();
    }
  });

  // دکمه مرحله بعدی
  const nextButton = document.getElementById('next-button');
  nextButton.addEventListener('click', function () {
    const currentStep = parseInt(window.location.hash.replace('#step', ''), 10);
    if (currentStep < 10) {
      window.location.hash = `#step${currentStep + 1}`;
      updateContentFromHash();
    }
  });
});
</script>