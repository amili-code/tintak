<section id="progress-steps" class="progress-steps section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>مراحل همکاری با باشگاه</h2>
    <p>برای استفاده از خدمات باشگاه مراحل زیر را طی کنید:</p>
  </div><!-- End Section Title -->

  <!-- Progress Steps -->
  <div class="container" data-aos="fade-up">
    <div class="progress-container">
      <!-- Progress Steps (No line, just circles with numbers) -->
      <div class="progress-step active" data-title="پرکردن فرم" data-description="در این مرحله شما باید فرم درخواست همکاری را پر کنید. این فرم شامل اطلاعات اولیه شما و نیازهای خاص شما از باشگاه است.">
        <span class="step-number">1</span>
      </div>
      <div class="progress-step" data-title="برگزاری جلسه" data-description="در این مرحله جلسه‌ای جهت معرفی ظرفیت‌ها و خدمات باشگاه و نیازهای خاص شما برگزار می‌شود.">
        <span class="step-number">2</span>
      </div>
      <div class="progress-step" data-title="تدوین برنامه" data-description="در این مرحله برنامه اجرایی تولید محتوا مطابق با نیازهای شما تهیه می‌شود.">
        <span class="step-number">3</span>
      </div>
      <div class="progress-step" data-title="عقد قرارداد" data-description="در این مرحله قرارداد همکاری بین شما و باشگاه منعقد می‌شود.">
        <span class="step-number">4</span>
      </div>
      <div class="progress-step" data-title="شروع تولید" data-description="در این مرحله تولید محتوا متناسب با محصولات و خدمات شما با استفاده از هوش مصنوعی آغاز می‌شود.">
        <span class="step-number">5</span>
      </div>
    </div>

    <!-- Explanation for Current Step -->
    <div class="step-explanation" id="step-description">
      <p>توضیحات مرحله را اینجا مشاهده خواهید کرد.</p>
    </div>

    <!-- Navigation Buttons -->
    <div class="progress-buttons">
      <button class="btn" id="prev" disabled>قبلی</button>
      <button class="btn" id="next">بعدی</button>
    </div>
  </div>

</section>

<style>
  /* Progress Container */
  .progress-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin: 30px 0;
    direction: rtl;
  }

  /* Steps */
  .progress-step {
    width: 40px;
    height: 40px;
    background: #dcdcdc;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
    transition: background-color 0.3s ease;
    margin-top: 20px;
  }

  .progress-step.active {
    background: #4154f1;
    color: white;
  }

  .progress-step.completed {
    background: #28a745;
    color: white;
  }

  .step-number {
    font-size: 1.2rem;
    font-weight: bold;
    
  }

  .progress-step::after {
    content: "";
  }

  /* Step Description */
  .step-explanation {
    margin-top: 30px;
    background: #f9f9f9;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid #ddd;
    text-align: center;
  }

  .step-explanation p {
    font-size: 1.1rem;
    color: #555;
  }

  /* Buttons */
  .progress-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }

  .btn {
    background: #4154f1;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .btn:disabled {
    background: #dcdcdc;
    cursor: not-allowed;
  }

  .btn:hover:not(:disabled) {
    background: #2c3dbb;
  }

  /* Media Queries for Mobile (Vertical) */
  @media (max-width: 768px) {
    .progress-container {
      flex-direction: column;
      align-items: center;
    }

    .progress-step {
      margin-bottom: 20px;
    }

    .step-number {
      font-size: 1rem;
    }

    /* Step Description */
    .step-explanation {
      margin-top: 20px;
      width: 100%;
    }
  }
</style>

<script>
  const steps = document.querySelectorAll('.progress-step');
  const nextBtn = document.getElementById('next');
  const prevBtn = document.getElementById('prev');
  const stepDescription = document.getElementById('step-description');
  let currentStep = 1;

  nextBtn.addEventListener('click', () => {
    currentStep++;
    if (currentStep > steps.length) {
      currentStep = steps.length;
    }
    updateSteps();
  });

  prevBtn.addEventListener('click', () => {
    currentStep--;
    if (currentStep < 1) {
      currentStep = 1;
    }
    updateSteps();
  });

  function updateSteps() {
    steps.forEach((step, index) => {
      const stepNumber = step.querySelector('.step-number');
      if (index < currentStep) {
        step.classList.add('active');
        step.classList.remove('completed');
        stepNumber.innerHTML = "✔"; // نمایش تیک
      } else if (index === currentStep - 1) {
        step.classList.remove('active');
        step.classList.remove('completed');
        stepNumber.innerHTML = index + 1; // شماره مرحله
      } else {
        step.classList.remove('active');
        step.classList.remove('completed');
        stepNumber.innerHTML = index + 1; // شماره مرحله
      }
    });

    prevBtn.disabled = currentStep === 1;
    nextBtn.disabled = currentStep === steps.length;

    // Update step description based on the current step
    const description = steps[currentStep - 1].getAttribute('data-description');
    stepDescription.innerHTML = `<p>${description}</p>`;
  }

  // Initialize with the first step's description
  updateSteps();
</script>
