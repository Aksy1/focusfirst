<?php
include 'db.php';

// Single query to fetch everything from event_details
$result = $conn->query("SELECT * FROM event_details WHERE id=1");

if ($result && $row = $result->fetch_assoc()) {
    // Access other fields like $row['event_date'], $row['event_time'], etc.
    $deadline = strtotime($row['countdown_deadline']) * 1000; // for JavaScript
} else {
    // Optional: handle error/fallback
    $deadline = time() * 1000; // fallback to current time
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=shield" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=group" />
</head>
<body class="poppins-regular">
  <div>
    <div class="container bg-container">
      <div class="row align-items-center">
        
        <!-- Left Column -->
        <div class="col-12 col-lg-6 mb-4 mt-5">
          <h2 class="poppins-semibold red-3"><span style="color:red; font-weight:800;">Stop</span> Dreaming. <span style="color:green; font-weight:800;">Start</span> Building.</h2>
          <h3 class="poppins-regular red-2">Learn how to build a global brand using social media 
— with no team, and no big budget. 
          </h3>

          <!-- Mobile Image Placement -->
          <div class="d-block d-lg-none text-center my-3">
            <img src="static/img/412392644_11593223.svg" class="img-fluid jumping" alt="Illustration">
          </div>

          <!-- Info Rows -->
          <div class="row mt-4 mx-1">
  <div class="col mb-3 me-md-3 box-1">
    <div class="d-flex align-items-center">
      <img src="static/img/calender.svg" class="py-2 ps-2 me-2" alt="Calendar">
      <div>
        <span class="ggg d-block">DATE</span>
        <h4 class="mb-0"><?php echo $row['event_date']; ?></h4>
      </div>
    </div>
  </div>

  <div class="col mb-3 me-md-3 box-1">
    <div class="d-flex align-items-center">
      <img src="static/img/time.svg" class="py-2 ps-2 me-2" alt="Time">
      <div>
        <span class="ggg d-block">TIME</span>
        <h4 class="mb-0"><?php echo $row['event_time']; ?></h4>
      </div>
    </div>
  </div>
</div>

<div class="row mt-1 mx-1">
  <div class="col mb-3 me-md-3 box-1">
    <div class="d-flex align-items-center">
      <img src="static/img/timer.svg" class="py-2 ps-2 me-2" alt="Duration">
      <div>
        <span class="ggg d-block">DURATION</span>
        <h4 class="mb-0"><?php echo $row['duration']; ?></h4>
      </div>
    </div>
  </div>

  <div class="col mb-3 me-md-3 box-1">
    <div class="d-flex align-items-center">
      <img src="static/img/calender.svg" class="py-2 ps-2 me-2" alt="Language">
      <div>
        <span class="ggg d-block">LANGUAGE</span>
        <h4 class="mb-0"><?php echo $row['language']; ?></h4>
      </div>
    </div>
  </div>
</div>

            <div class="col-12 col-lg-10 mb-5">
              <h4 class="poppins-light">Join Shabeeb Muhammed for a 4‑hour live masterclass and get the blueprint to build your own empire.</h4>
            </div>
            <button class="glare-button">Secure Your Spot Now</button>
          </div>
          <div class="col-12 col-lg-6 text-center d-none d-lg-block">
          <img src="static/img/412392644_11593223.svg" class="img-fluid jumping" alt="Illustration">
        </div>
        </div>

        <!-- Right Column (desktop image only) -->
        

      </div>
    </div>
  </div>
<div class="bg-black text-white beam-background ">

<div class="text-center py-5">
  <img src="static/img/focusfirstlogo1.png" width="400" />
  </div>
  <!-- Masterclass Section -->
<section class="py-5 masterclass-section text-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold text-gradient mb-3">About the Masterclass</h2>
      <p class="lead fst-italic">
        Your idea is brilliant—but why isn’t the world hearing it? <br>
        This <strong>4-hour masterclass</strong> delivers the blueprint to grow and scale your business like never before.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="key-takeaways rounded-4 p-4 shadow-lg">
          <h4 class="fw-bold mb-4 text-center text-warning"><i class="bi bi-lightbulb-fill me-2"></i>Key Takeaways You’ll Learn</h4>
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col"><div class="takeaway-item">1. Scale Your Business with Social Media</div></div>
            <div class="col"><div class="takeaway-item">2. Choosing the Right Social Media Platforms</div></div>
            <div class="col"><div class="takeaway-item">3. Finding the Perfect Product-Market Fit</div></div>
            <div class="col"><div class="takeaway-item">4. Crafting the Ideal Pricing Strategy</div></div>
            <div class="col"><div class="takeaway-item">5. Building a Winning Marketing Strategy</div></div>
            <div class="col"><div class="takeaway-item">6. Targeting Your Ideal Audience</div></div>
            <div class="col"><div class="takeaway-item">7. Mastering Branding & Personal Growth</div></div>
            <div class="col"><div class="takeaway-item">8. Converting Followers into Customers</div></div>
            <div class="col"><div class="takeaway-item">9. Building Trust Online – Fast</div></div>
            <div class="col"><div class="takeaway-item">10. Running Low-Budget Ads That Work</div></div>
            <div class="col"><div class="takeaway-item">11. Creating a Magnetic Personal Brand</div></div>
            <div class="col"><div class="takeaway-item">12. Beating the Algorithm Smartly</div></div>
            <div class="col"><div class="takeaway-item">13. Scaling from Local to Global</div></div>
            <div class="col"><div class="takeaway-item">14. Time Management for Solo Entrepreneurs</div></div>
            <div class="col"><div class="takeaway-item">15. Live Q&A with <strong>Shabeeb Muhammed</strong></div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#booking-section" class="btn btn-lg btn-glow px-4 py-2">
        🚀 I’m Ready to Build My Brand
      </a>
    </div>
  </div>
</section>
<div class="bg-black text-center mt-5 mb-5">
    <h4>Let me tell you</h4>
    <h2>Is This Masterclass Right for You?</h2>
    <div class="container d-flex justify-content-center">
      <div class="row g-4 justify-content-center">
  
        <!-- Card 1 -->
        <div class="col-md-3 col-12">
          <div class="card h-100 card-1">
            <img src="static/img/bsns-card.png" class="card-img-top-1" alt="Startup Brands">
            <div class="card-body text-white">
              <h5 class="card-title">New Entrepreneurs</h5>
              <p class="card-text">You’re just starting and need a roadmap to stand out.</p>
            </div>
          </div>
        </div>
  
        <!-- Card 2 -->
        <div class="col-md-3 col-12">
          <div class="card h-100 card-1">
            <img src="static/img/bsns-card.png" class="card-img-top-1" alt="Marketing Teams">
            <div class="card-body text-white">
              <h5 class="card-title">Aspiring Business Owners</h5>
              <p class="card-text">You’ve got an idea & want to learn how to turn it into a brand.</p>
            </div>
          </div>
        </div>
  
        <!-- Card 3 -->
        <div class="col-md-3 col-12">
          <div class="card h-100 card-1">
            <img src="static/img/bsns-card.png" class="card-img-top-1" alt="E-com Owners">
            <div class="card-body text-white">
              <h5 class="card-title">Growth‑Hungry Founders</h5>
              <p class="card-text">You’re stuck and ready to scale using digital strategies.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12">
          <div class="card h-100 card-1">
            <img src="static/img/bsns-card.png" class="card-img-top-1" alt="E-com Owners">
            <div class="card-body text-white">
              <h5 class="card-title">DIY Marketers/Solopreneurs</h5>
              <p class="card-text">You’ve got tools but need clarity—and results—with small budgets.</p>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>

<section class="scroll-trigger-ready__worm-wrap section container-fluid">
    <div class="row">
      <!-- Left Fixed Image (Under Starbucks logo on mobile) -->
      <div class="col-12 col-lg-6 sticky-img-container">
        <img src="static/img/focusfirstlogo.png" alt="Left Image" class="img-fluid scroll-image sticky-img" />
      </div>
      
  
      <!-- Right Scrollable Content -->
      <div class="col-12 col-lg-6">
        <div class="scroll-content p-3">
          <h4 class="txt-expert">Meet Your Mentor</h4>
          <h1 class="silver-gradient-text">Shabeeb Muhammed</h1>
          <p>
            Serial entrepreneur, Meta Marketing Pro member, and builder of multiple global brands across 20+ countries. Shabeeb has walked the path you’re on right now—bootstrapping powerful brands with budget-friendly social media and no big team. Now, he’s ready to show you the exact strategies that worked for him.

          </p>
  
          <!-- Frosted Boxes with Images -->
          <!-- <div class="row g-3 mb-4 mt-5">
            <div class="col-6">
              <div class="frosted-box position-relative">
                <img src="static/img/clint.png" class="top-image-1 img-fluid" alt="Image 1" />
                <div class="content text-center">
                  <p>Mountain</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="frosted-box position-relative">
                <img src="static/img/clint.png" class="top-image-1 img-fluid" alt="Image 2" />
                <div class="content text-center">
                  <p>Bird</p>
                </div>
              </div>
            </div>
          </div> -->
  
          <!-- Image Grid Section -->
          <div class="text-center mb-5">
            <!-- <p class="txt-expert">Clients we worked with</p> -->
            <div class="image-grid">
              <div class="image-box">
                <!-- <div class="image-title">Nike</div> -->
                <img src="static/img/DS1.JPG" alt="Image 1" />
              </div>
              
              
              <div class="image-box">
                <!-- <div class="image-title">LV</div> -->
                <img src="static/img/img3.JPG" alt="Image 4" />
              </div>
              <div class="image-box">
                <!-- <div class="image-title">AR</div> -->
                <img src="static/img/img4.JPG" alt="Image 5" />
              </div>
              <div class="image-box">
                <!-- <div class="image-title">Adidas</div> -->
                <img src="static/img/img1.JPG" alt="Image 2" />
              </div>
              <!-- <div class="image-box">

                <img src="static/img/DS1.JPG" alt="Image 6" />
              </div> -->

            </div>
            <div class="image-box1">
                <!-- <div class="image-title">Gucci</div> -->
                <img src="static/img/DS3.JPG" alt="Image 3" />
              </div>
          </div>
  
        </div>
      </div>
    </div>
</section>


  
  <!-- Who Should Join Section -->
<div class="bg-black text-center pt-5 pb-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold text-white">What People Are Saying 😄</h1>
  </div>

  <div class="container">
    <div class="row g-4">

      <!-- Testimonial 1 -->
      <div class="col-md-6 col-12">
        <div class="card card-test bg-dark text-white border-secondary h-100 p-3">
          <div class="d-flex align-items-center mb-3">
            <img src="static/img/person1.jpg" class="rounded-circle me-3" width="60" height="60" alt="Person 1">
            <div class="text-start">
              <h5 class="mb-0">Aarav Sharma</h5>
              <small>Startup Founder</small>
            </div>
          </div>
          <p class="fst-italic">"This masterclass was a turning point. I finally understand how to grow my brand with clarity and confidence."</p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-6 col-12">
        <div class="card card-test bg-dark text-white border-secondary h-100 p-3">
          <div class="d-flex align-items-center mb-3">
            <img src="static/img/person2.jpg" class="rounded-circle me-3" width="60" height="60" alt="Person 2">
            <div class="text-start">
              <h5 class="mb-0">Meera Iyer</h5>
              <small>Digital Marketer</small>
            </div>
          </div>
          <p class="fst-italic">"Clear, actionable and inspiring. Shabeeb’s strategies helped me double my clients in a month."</p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-6 col-12">
        <div class="card card-test bg-dark text-white border-secondary h-100 p-3">
          <div class="d-flex align-items-center mb-3">
            <img src="static/img/person3.jpg" class="rounded-circle me-3" width="60" height="60" alt="Person 3">
            <div class="text-start">
              <h5 class="mb-0">Rohit Menon</h5>
              <small>Freelancer</small>
            </div>
          </div>
          <p class="fst-italic">"I’ve attended many sessions before, but this one was the most practical and results-driven."</p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="col-md-6 col-12">
        <div class="card card-test bg-dark text-white border-secondary h-100 p-3">
          <div class="d-flex align-items-center mb-3">
            <img src="static/img/person4.jpg" class="rounded-circle me-3" width="60" height="60" alt="Person 4">
            <div class="text-start">
              <h5 class="mb-0">Divya R</h5>
              <small>Small Business Owner</small>
            </div>
          </div>
          <p class="fst-italic">"Everything just made sense. I learned how to package, price, and promote my service like a pro."</p>
        </div>
      </div>

    </div>
  </div>
</div>

 <section class="offer-section py-5 text-white text-center">
  <div class="container">
    <h2 class="display-5 fw-bold text-glow mb-4">Here’s Everything You Get</h2>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <ul class="list-unstyled fs-5 mb-4 text-start mx-auto offer-list">
          <li>🎓 Live 4‑Hour Online Masterclass</li>
          <li>🔍 Real‑Time Q&A Session</li>
          <li>📘 Actionable Workbook & Checklists</li>
          <li>🎥 Recording for Lifetime Access</li>
          <li>🤝 Private Entrepreneur's Broadcast Channel</li>
          <li>🎁 <strong>Bonus:</strong> Free 30‑Minute Strategy Call (First 10 Enrollments)</li>
        </ul>

        <div class="pricing-box my-4">
          <p class="fs-5 mb-1 text-light"><s>Actual Price: ₹2999</s></p>
          <h3 class="display-6 text-warning fw-bold">Now Only ₹299</h3>
          <p class="text-light">Limited Time Offer</p>
        </div>

        <!-- Countdown Timer -->
        <div class="countdown-box mb-4 text-center text-white">
  <p class="text-uppercase fw-semibold mb-2">Next session starts soon</p>
  <div id="countdown" class="d-flex justify-content-center gap-3 fs-4 fw-bold">
    <span id="cd-hours">--h</span>
    <span id="cd-minutes">--m</span>
    <span id="cd-seconds">--s</span>
  </div>
  <p class="small text-light mt-2">Seats are limited!</p>
</div>

        <!-- CTA Button -->
        <a href="#booking-section" class="btn btn-cta btn-lg px-5 py-3 mt-3">
          🚀 Enrol Now and Transform Your Brand
        </a>
      </div>
    </div>
  </div>
</section>



  <!-- Certificate Section -->
  <!-- <div class="container text-center my-5">
    <h2 class="fw-bold mb-4">Get Certified Scaling Expert After this Workshop</h2>
    <img src="static/img/certificate.png" class="img-fluid" alt="Certificate">
  </div> -->
  <div class="text-center pb-5 bg-black">
    <!-- <h2 class="fw-bold my-4 silver-gradient-text">What Makes Our Workshop<br>Standout from Others</h2> -->
    <!-- <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 text-center">
                <img src="static/img/bsnsman.png" class="img-bsnsman" alt="Right Image" width="400">
              </div>
          

          <div class="col-md-6 mb-4 mb-md-0">
            <div class="row g-3 text-white">

              <div class="col-6">
                <div class="p-3 bg-00 rounded shadow-sm text-center">
                    <span class="material-symbols-outlined">
                    group
                    </span>
                    <p>Helped 500+ Clients To Get
                    Profits From Meta Ads</p></div>
              </div>

              <div class="col-6">
                <div class="p-3 bg-00 rounded shadow-sm text-center"><span class="material-symbols-outlined">
                    group
                    </span>
                    <p>Helped 500+ Clients To Get
                    Profits From Meta Ads</p></div>
              </div>

              <div class="col-6">
                <div class="p-3 bg-00 rounded shadow-sm text-center"><span class="material-symbols-outlined">
                    group
                    </span>
                    <p>Helped 500+ Clients To Get
                    Profits From Meta Ads</p></div>
              </div>

              <div class="col-6">
                <div class="p-3 bg-00 rounded shadow-sm text-center"><span class="material-symbols-outlined">
                    group
                    </span>
                    <p>Helped 500+ Clients To Get
                    Profits From Meta Ads</p></div>
              </div>
            </div>
          </div>
      
        </div>
      </div> -->
      
  </div>
  <section class="faq-section py-5 bg-dark text-white">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Have Questions? We’ve Got Answers.</h2>
    </div>

    <div class="accordion accordion-flush" id="faqAccordion">
      <!-- Q1 -->
      <div class="accordion-item bg-transparent border-bottom border-secondary">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            When is the masterclass?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white">
            – <?php echo $row['event_date']; ?>  at  <?php echo $row['event_time']; ?>
          </div>
        </div>
      </div>

      <!-- Q2 -->
      <div class="accordion-item bg-transparent border-bottom border-secondary">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            If I miss the live session?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white">
            – Don’t worry, you can opt for a recording of the session.
          </div>
        </div>
      </div>

      <!-- Q3 -->
      <div class="accordion-item bg-transparent border-bottom border-secondary">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            Is it beginner-friendly?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white">
            – Absolutely—no prior marketing experience needed.
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="accordion-item bg-transparent border-bottom border-secondary">
        <h2 class="accordion-header" id="faq4">
          <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            What do I need to attend?
          </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white">
            – Just an internet‑connected device—computer or mobile.
          </div>
        </div>
      </div>

      <!-- Q5 -->
      <div class="accordion-item bg-transparent border-bottom border-secondary">
        <h2 class="accordion-header" id="faq5">
          <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
            Is there a money-back guarantee?
          </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white">
            – Yes. Attend the full session—if it’s not valuable, we’ll compensate you 100%.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Final CTA Section -->
<section class="final-cta-section py-5 text-white text-center">
  <div class="container">
    <h2 class="display-5 fw-bold text-uppercase mb-3 silver-gradient-text">The Future of Your Brand Starts Now</h2>
    <h2 class="lead fw-medium mb-4">Stop guessing. Start building.</h2>
    <p class="mb-5 fs-5 text-light">
      This is your chance to learn actionable strategies from someone who’s done it again and again—<br class="d-none d-md-block" />
      and now it’s your turn.
    </p>
    <a href="#booking-section" class="btn btn-cta btn-lg px-4 py-2">
      🚀 Yes, I Want to Build My Global Brand
    </a>
  </div>
</section>
  <div class="ftr text-white">
<div class="container">
  <div class="row">
              <!-- Column 1 -->
              <div class="col-md-6 mt-3">
                <div>
                  <h5>₹199/-</h5>
                  <p>(Only 20 Seats Left!)<br>1 Lakh+ Students Taught</p>
                </div>
              </div>
          
              <!-- Column 2 -->
              <div class="col-md-6 mt-3 d-flex justify-content-center">
                <div>
                    <button class="glare-button">Book your Slot</button>
                </div>
              </div>
            </div>
          </div>
</div>
</div>


  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  const countdownDeadline = <?php echo $deadline * 1000; ?>; // Convert to milliseconds
</script>

  <script>
    gsap.registerPlugin(ScrollTrigger);

    // Create timeline with ScrollTrigger
    gsap.timeline({
      scrollTrigger: {
        trigger: ".scroll-trigger-ready__worm-wrap",
        start: "top top",
        end: "bottom bottom",
        scrub: 1,
      }
    }).to(".scroll-image", {
      y: () => {
        const right = document.querySelector(".scroll-content");
        const leftImg = document.querySelector(".scroll-image");
        return right.scrollHeight - leftImg.offsetHeight;
      },
      ease: "none"
    });
  </script>
  <script>
    gsap.registerPlugin(ScrollTrigger);
  
    gsap.to("#movingCircle", {
      scrollTrigger: {
        trigger: ".timeline-container",
        start: "top center",
        end: "bottom bottom",
        scrub: true
      },
      y: () => {
        const timelineHeight = document.querySelector('.timeline-line').offsetHeight;
        return timelineHeight - 20; // subtract circle size
      },
      ease: "none"
    });
  </script>
  <script>
  window.addEventListener('scroll', function () {
    const ftr = document.querySelector('.ftr');
    if (window.scrollY > window.innerHeight) {
      ftr.classList.add('visible');
    } else {
      ftr.classList.remove('visible');
    }
  });
</script>
<script>
  const deadline = <?php echo $deadline; ?>;

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = deadline - now;

    if (distance <= 0) {
      document.getElementById("cd-hours").innerText = "00h";
      document.getElementById("cd-minutes").innerText = "00m";
      document.getElementById("cd-seconds").innerText = "00s";
      return;
    }

    const hours = String(Math.floor((distance / (1000 * 60 * 60)))).padStart(2, '0');
    const minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
    const seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');

    document.getElementById("cd-hours").innerText = hours + "h";
    document.getElementById("cd-minutes").innerText = minutes + "m";
    document.getElementById("cd-seconds").innerText = seconds + "s";
  }

  setInterval(updateCountdown, 1000);
  updateCountdown();
</script>


</body>
</html>
