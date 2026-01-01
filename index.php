<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHNOREX SOL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
    <!-- Header Start -->
    <header class="nav-bar">
  <div class="nav-container">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" alt="Logo" /></a>
    </div>
     <div class="menu-icon" id="menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!-- Navigation Links -->
    <nav class="nav-links" id="nav-links">
      <ul>
        <li><a href="about.php">About Us</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="blogs.php">Blogs</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <button class="button" type="button">
        <a href="contact.php" class="talk-to-an-expert">Talk To An Expert</a>
      </button>
    </nav>
  </div>
</header>
<script>
  const menuIcon = document.getElementById('menu-icon');
const navLinks = document.getElementById('nav-links');

menuIcon.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  menuIcon.classList.toggle('active');
});
</script>

<!-- Header End!! -->

<!-- Hero Section Start -->
<section class="hero" id="home">
    <div class="hero-container">
        <div-2 class="hero-banner">
            <span class="banner-badge">New</span>
            <p class="banner-text">Trusted by Global Firms</p>
        </div>
        <div class="hero-content">
            <h1 class="hero-title"> Turn Compliance Into a Competitive Edge</h1>
            <p class="hero-description">We simplify Governance, Risk, and Compliance (GRC),
               helping you meet complex standards with confidence and without 
               slowing your business down.</p>
        </div>
    </div>
    <div class="cta-container" style="display: inline;">
        <button class="cta-button cta-button--primary">
            <a href="contact.php" style="text-decoration: none; color: unset;"><span class="cta-button__text">Get Your Free Compliance Consultation</span></a>
        </button>
        <button-2 class="cta-button cta-button--secondary">
            <a href="service.php" style="text-decoration: none; color: unset;"><span class="cta-button__text">Discover More</span></a>
            <svg 
            class="cta-button__icon"
            width="20px"
            height="20px"
            viewbox="0 0 20 20"
            fill="none"
            xmlns="https://w3.org/2000/svg"
            ><path d="M7 4L13 10L7 16"
            stroke="currentcolor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            >
            </path></svg>
            
        </button-2>
    </div>
</section>
<!-- Hero Section End -->
<!-- Section cyber Security Services -->
<div style="display: flex; justify-content: center;">
 <div style="display: flex; justify-content: center;">
 <main class="cyber-service" style="width: 1100px;">
  <section class="card1 businesses-secured">
    <div class="card-content">
      <h2 class="card-title" style="font-size:30px;
  line-height: 72.6px;
  opacity: 0.75;
  color: var(--primarygreen-900);
  font-family: 'Haffer-TRIAL-Medium', Arial, Helvetica, sans-serif;
  font-weight: 600;">30+ Orders</h2>
      <p class="card-description1">
        We help organizations achieve compliance with 30+ successful audits and certifications (ISO 27001, SOC 2, GDPR, HIPAA, PCI DSS, SAMA CSF) through a proven, high-success methodology.
      </p>
    </div>
  </section>
  <section class="card1 cyber-experts">
    
    <div class="experts-count">
      <span class="count" style="font-size:30px;
  line-height: 72.6px;
  opacity: 0.75;
  color: var(--primarygreen-900);
  font-family: 'Haffer-TRIAL-Medium', Arial, Helvetica, sans-serif;
  font-weight: 600;">10+ Experts</span>
    </div>
    <p class="card-description1">
      Our certified experts in ISO, SOC 2, GDPR, NIST, and global frameworks combine technical depth with business insight to deliver end-to-end compliance excellence.
    </p>
  </section>
  <section class="card1 our-services">
    <h2 class="count" style="font-size:30px;
  line-height: 72.6px;
  opacity: 0.75;
  color: var(--primarygreen-900);
  font-family: 'Haffer-TRIAL-Medium', Arial, Helvetica, sans-serif;
  font-weight: 600;">7+ Years</h2>
    <p class="card-description1">
     In finance, healthcare, SaaS, and critical infrastructure, we design tailored compliance programs that anticipate challenges and meet complex requirements.
    </p>
    </div>
  </section>
 </main>
</div>
 <!-- About section Start -->


<section class="about-section">
    <div class="badge">Why TechnoRex</div>
    <div class="cards">
        <div class="about-card">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
<path d="M11.6666 7.49998C8.90517 7.49998 6.66659 9.73856 6.66659 12.5C6.66659 13.4477 6.93029 14.3339 7.38832 15.0891C5.0787 15.5309 3.33325 17.5616 3.33325 20C3.33325 22.4383 5.0787 24.469 7.38832 24.9108M11.6666 7.49998C11.6666 5.1988 13.5321 3.33331 15.8333 3.33331C18.1344 3.33331 19.9999 5.1988 19.9999 7.49998V32.5C19.9999 34.8011 18.1344 36.6666 15.8333 36.6666C13.5321 36.6666 11.6666 34.8011 11.6666 32.5C8.90517 32.5 6.66659 30.2615 6.66659 27.5C6.66659 26.5521 6.93029 25.666 7.38832 24.9108M11.6666 7.49998C11.6666 8.86316 12.3212 10.0734 13.3333 10.8336M7.38832 24.9108C7.98239 23.9313 8.90337 23.172 9.99992 22.7845" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28.3333 32.4998C31.0948 32.4998 33.3333 30.2612 33.3333 27.4998C33.3333 26.552 33.0697 25.6658 32.6117 24.9107C34.9212 24.4688 36.6667 22.4382 36.6667 19.9998C36.6667 17.5615 34.9212 15.5307 32.6117 15.089M28.3333 32.4998C28.3333 34.801 26.4678 36.6665 24.1667 36.6665C21.8655 36.6665 20 34.801 20 32.4998V7.4998C20 5.19861 21.8655 3.33313 24.1667 3.33313C26.4678 3.33313 28.3333 5.19861 28.3333 7.4998C31.0948 7.4998 33.3333 9.73836 33.3333 12.4998C33.3333 13.4476 33.0697 14.3337 32.6117 15.089M28.3333 32.4998C28.3333 31.1367 27.6787 29.9263 26.6667 29.1662M32.6117 15.089C32.0175 16.0685 31.0965 16.8277 30 17.2153" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <h3>Practical Compliance</h3>
            <p> We cut through the noise. Instead of drowning you in checklists, we translate complex frameworks like ISO 27001, SOC 2, GDPR, and SAMA into smart, actionable controls. Every recommendation is designed to protect your business, streamline operations, and support long-term growth not slow you down with unnecessary red tape.</p>
        </div>
        <div class="about-card">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M33.72 16.7567C34.52 15.8567 35.9 14.4967 35.8264 13.9429C35.883 13.4042 35.5914 12.8981 35.0082 11.886L34.1857 10.4584C33.5635 9.37866 33.2524 8.83879 32.723 8.62353C32.1939 8.40824 31.5952 8.57813 30.398 8.91786L28.3642 9.49069C27.5999 9.66694 26.798 9.56696 26.1 9.20838L25.5385 8.88443C24.9402 8.50111 24.4799 7.93594 24.225 7.27163L23.6684 5.60931C23.3025 4.50929 23.1195 3.95928 22.6839 3.64468C22.2482 3.33008 21.6695 3.33008 20.5124 3.33008H18.6544C17.497 3.33008 16.9184 3.33008 16.4829 3.64468C16.0473 3.95928 15.8643 4.50929 15.4983 5.60931L14.9418 7.27163C14.6869 7.93594 14.2266 8.50111 13.6281 8.88443L13.0666 9.20838C12.3688 9.56696 11.5668 9.66694 10.8024 9.49069L8.76877 8.91786C7.5716 8.57813 6.97293 8.40824 6.4436 8.62353C5.91427 8.83879 5.60327 9.37866 4.9811 10.4584L4.15843 11.886C3.57528 12.8981 3.28378 13.4042 3.34028 13.9429C3.39695 14.4816 3.78728 14.9157 4.56793 15.7839L6.28643 17.705C6.70627 18.2367 7.0046 19.1633 7.0046 19.9963C7.0046 20.83 6.70643 21.7563 6.28643 22.2882L4.56793 24.2093C3.78728 25.0775 3.39695 25.5117 3.34028 26.0503C3.28378 26.5892 3.57528 27.0952 4.15843 28.1072L4.9811 29.5348C5.60327 30.6145 5.91427 31.1545 6.4436 31.3697C6.97293 31.585 7.5716 31.4152 8.76877 31.0753L10.8024 30.5025C11.5669 30.3262 12.3689 30.4263 13.0669 30.785L13.6283 31.109C14.2268 31.4923 14.6869 32.0573 14.9416 32.7217L15.4983 34.3842C15.8643 35.4842 16.0666 36.056 16.4 36.2967C16.5 36.369 16.9 36.6967 17.88 36.6667" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M25 28.6969C25 28.6969 26.6667 29.1702 27.5 30.8369C27.5 30.8369 29.327 26.6702 31.68 25.8369" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M36.6667 28.33C36.6667 32.9323 32.9357 36.6633 28.3333 36.6633C23.731 36.6633 20 32.9323 20 28.33C20 23.7276 23.731 19.9966 28.3333 19.9966C32.9357 19.9966 36.6667 23.7276 36.6667 28.33Z" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M23.5998 15.7367C22.1998 14.5967 21.0998 14.1567 19.4998 14.1567C16.4998 14.1967 13.7598 16.675 13.7598 19.8966C13.7598 21.6728 14.2998 22.7966 15.3198 23.9766" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            <h3>Clear Roadmaps</h3>
            <p>Compliance can feel overwhelming, but we make it simple. From your first gap assessment to final certification, you get a clear, prioritized roadmap. Every milestone is explained, every step is planned, and every outcome is measurable. No confusion. No guesswork. Just execution with confidence.
</p>
        </div>
        <div class="about-card">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 27.5V24.1667" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M7.1131 31.4078C7.4879 34.1917 9.79363 36.3725 12.5995 36.5015C14.9605 36.61 17.3589 36.6667 20.0001 36.6667C22.6413 36.6667 25.0396 36.61 27.4006 36.5015C30.2066 36.3725 32.5123 34.1917 32.8871 31.4078C33.1316 29.5912 33.3334 27.7293 33.3334 25.8333C33.3334 23.9373 33.1316 22.0755 32.8871 20.2588C32.5123 17.475 30.2066 15.2941 27.4006 15.1651C25.0396 15.0566 22.6413 15 20.0001 15C17.3589 15 14.9605 15.0566 12.5995 15.1651C9.79363 15.2941 7.4879 17.475 7.1131 20.2588C6.8685 22.0755 6.66675 23.9373 6.66675 25.8333C6.66675 27.7293 6.8685 29.5912 7.1131 31.4078Z" stroke="#1F2937" stroke-width="1.5"/>
  <path d="M12.5 15V10.8333C12.5 6.69118 15.8579 3.33331 20 3.33331C24.1422 3.33331 27.5 6.69118 27.5 10.8333V15" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <h3>Specialist-Led Delivery</h3>
            <p>We are not generalists we are domain experts. Our team includes certified specialists across ISO standards, SOC 2, GDPR, NIST, SAMA CSF, and more. That means you receive guidance from people who not only know the frameworks, but also understand how to apply them effectively in real business environments.
</p>
        </div>
        <div class="about-card">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M36.6667 11.25H32.0185C31.0167 11.25 30.5157 11.25 30.0434 11.107C29.571 10.964 29.1542 10.6861 28.3205 10.1304C27.0702 9.29674 25.6437 8.34577 24.935 8.13122C24.2265 7.91669 23.475 7.91669 21.9722 7.91669C19.9285 7.91669 18.6112 7.91669 17.6924 8.29729C16.7735 8.67789 16.051 9.40047 14.6058 10.8456L13.334 12.1174C13.0083 12.4431 12.8455 12.606 12.745 12.7667C12.3723 13.3627 12.4136 14.1284 12.8482 14.6809C12.9654 14.8299 13.1449 14.9743 13.5037 15.2631C14.83 16.3304 16.742 16.2239 17.943 15.0157L20 12.9465H21.6667L31.6667 23.006C32.5872 23.932 32.5872 25.4331 31.6667 26.3591C30.7462 27.2851 29.2539 27.2851 28.3334 26.3591L27.5 25.5208M27.5 25.5208L22.5 20.4911M27.5 25.5208C28.4205 26.4468 28.4205 27.9481 27.5 28.874C26.5795 29.8 25.0872 29.8 24.1667 28.874L22.5 27.1975M22.5 27.1975C23.4205 28.1233 23.4205 29.6246 22.5 30.5506C21.5795 31.4765 20.0872 31.4765 19.1667 30.5506L16.6667 28.0356M22.5 27.1975L19.1667 23.8641M16.6667 28.0356L15.8334 27.1975M16.6667 28.0356C17.5872 28.9616 17.5872 30.463 16.6667 31.389C15.7462 32.3148 14.2539 32.3148 13.3334 31.389L8.62732 26.5848C7.66029 25.5976 7.17677 25.1041 6.55729 24.8436C5.93781 24.5833 5.24684 24.5833 3.86494 24.5833H3.33337" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M36.6667 24.5833H32.5" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
  <path d="M14.1667 11.2501H3.33337" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            <h3>A True Partner</h3>
            <p>We don’t just advise from the sidelines. Our consultants work alongside your team as trusted partners, guiding you through every step of the journey. Along the way, we transfer knowledge and skills so your people become stronger, more independent, and better prepared for the future.
</p>
        </div>
    </div>
</section>

  <!-- End -->

<!-- Services Section -->

<section id="service" class="services-section">
    <div class="services-left">
        <div class="badge">Our Services</div>
        <h1>Your End-to-End GRC Partner</h1>
        <a href="#" class="btn">Discover More →</a>
    </div>

    <div class="services-right">
        <div class="service-card">
            <h3>Certification</h3>
            <p>Get certified and stay compliant with leading standards: ISO 27001, SOC 2, GDPR, HIPAA, PCI DSS, 
              NIST, SAMA CSF. We handle it all from documentation.</p>
        </div>
        <div class="service-card">
            <h3>Risk Management</h3>
            <p>Proactively identify, assess, and reduce risk. Our experts help you run risk assessments, vendor 
              reviews, and mitigation strategies that actually work.</p>
        </div>
        <div class="service-card">
            <h3>Business Resilience</h3>
            <p>Prepare for the unexpected. We help you build Business Continuity (BCP), Incident Response (IR), 
              and Disaster Recovery (DR) plans that are ready when it matters most.</p>
        </div>
        <div class="service-card">
            <h3>Cybersecurity Advisory</h3>
            <p>While we lead with GRC, we also advise on technical security including Pen Testing and Vulnerability 
              Assessments to ensure your program is complete.</p>
        </div>
    </div>
</section>

<!--Services End -->

<!-- Track Record Section Start -->

<section class="track-record">
    <div class="track-left">
        <div class="badge">Track Record</div>
        <h1>Built to Protect.<br>Backed by Results.</h1>
        <p>Trusted by early adopters in fintech, healthtech, SaaS, and critical infrastructure.</p>
    </div>
 <div class="divider"></div>
 <div class="track-right">
  <div class="stat stats-section">
    <h2 class="counter" data-target="99" data-format="percent">0%</h2>
    <p>First-Time Audit Success Rate</p>
  </div>
  <div class="stat">
    <h2 class="counter" data-target="10" data-format="plus">0+</h2>
    <p>Certified GRC Experts Onboard</p>
  </div>
  <div class="stat">
    <h2 class="counter" data-target="7" data-format="years">0+ Years</h2>
    <p>of Leadership Experience Across Regulated Industries</p>
  </div>
  <div class="stat">
    <h2 class="counter" data-target="85" data-format="percent">0%</h2>
    <p>Clients Report Stronger Security Posture</p>
  </div>

 </div>
</section>

<!-- Track Recored End -->

<section  id="about" class="aboutus-section">  
    <div class="wrap">
      <!-- LEFT IMAGE PANEL -->
      <img class="shot" alt="Team collaborating at table with laptops and tablets" src="images/Rectangle 1.jpg">
      <!-- RIGHT CONTENT PANEL -->
      <div class="copy">
        <div class="badge">About Us</div>
        <h1 class="heading">You Don’t Just Get a Consultant <br/>You Get a Team</h1>
        <p class="sub">
           Our team includes certified GRC experts, former auditors, and cybersecurity strategists. We take the time to understand your business so your GRC program doesn’t just tick boxes, it drives real value.
        </p>
        <div class="actions">
          <button class="btn1" href="#">Meet Our Experts
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M13 5l7 7-7 7M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
</section>


<!-- Certificates section -->
<section class="award-section">
  <section class="award-track-record">
        <div class="badge">Awards & Certifications</div>
        <p style="font-size:20px;">Your Partner in Global Certification.</p>
    </section>

    <!-- First Row -->
    <div class="awards-row scroll-left">
      <div class="award-card">
        <img src="images/pci.webp" alt="icon">
        <div>
          <h4>PCI DSS</h4>
          <p>Certified Information Systems Security Professional</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/NCA.png" alt="icon">
        <div>
          <h4>NCA ECC </h4>
          <p>Cybersecurity and Infrastructure Security Agency</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/ISO.png" alt="icon">
        <div>
          <h4>ISO 27001:2022</h4>
          <p>Information Security Management System</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/cyber.png" alt="icon">
        <div>
          <h4>Cyber Essentials</h4>
          <p>Certified Information Privacy Professional/Europe</p>
        </div>
      </div>

      <!-- Duplicate for infinite scroll -->
      <div class="award-card">
        <img src="images/pci.webp" alt="icon">
        <div>
          <h4>PCI DSS</h4>
          <p>Certified Information Systems Security Professional</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/NCA.png" alt="icon">
        <div>
          <h4>NCA ECC </h4>
          <p>Cybersecurity and Infrastructure Security Agency</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/ISO.png" alt="icon">
        <div>
          <h4>ISO 27001:2022</h4>
          <p>Information Security Management System</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/cyber.png" alt="icon">
        <div>
          <h4>Cyber Essentials</h4>
          <p>Certified Information Privacy Professional/Europe</p>
        </div>
      </div>
    </div>

    <!-- Second Row -->
    <div class="awards-row scroll-right">
      <div class="award-card">
        <img src="images/sama.png" alt="icon">
        <div>
          <h4>SAMA</h4>
          <p>Saudi Arabian Monetary Agency</p>

        </div>
      </div>
      <div class="award-card">
        <img src="images/GDPR.png" alt="icon">
        <div>
          <h4>GDPR</h4>
          <p>General Data Protection Regulation</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/HIPAA.png" alt="icon">
        <div>
          <h4>HIPAA</h4>
          <p>Health Insurance Portability and Accountability Act</p>
        </div>
      </div>
       <div class="award-card">
        <img src="images/soc2.png" alt="icon">
        <div>
          <h4>SOC 2</h4>
          <p>System and Organization Controls 2 by AICPA</p>
        </div>
      </div>
      

      <!-- Duplicate for infinite scroll -->
      <div class="award-card">
        <img src="images/sama.png" alt="icon">
        <div>
          <h4>SAMA</h4>
          <p>Saudi Arabian Monetary Agency</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/GDPR.png" alt="icon">
        <div>
          <h4>GDPR</h4>
          <p>General Data Protection Regulation</p>
        </div>
      </div>
      <div class="award-card">
        <img src="images/HIPAA.png" alt="icon">
        <div>
          <h4>HIPAA</h4>
          <p>Health Insurance Portability and Accountability Act</p>
        </div>
      </div>
    </div>
</section>
  <!-- Cerification Section End -->
<!-- FAQs Section Start -->
 <section class="faq-section">
  <h2>Frequently asked questions</h2>
  <div class="faq-container">

    <div class="faq-item active">
      <button class="faq-question">
        What’s the first step toward compliance?
        <span class="faq-icon">
        <!-- Plus Icon -->
        <svg class="icon-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <!-- Minus Icon -->
        <svg class="icon-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      </button>
      <div class="faq-answer">
        <p>We start with a Gap Analysis. It shows you exactly where you stand and what needs to happen next.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        How long does ISO 27001 take?
        <span class="faq-icon">
        <!-- Plus Icon -->
        <svg class="icon-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <!-- Minus Icon -->
        <svg class="icon-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      </button>
      <div class="faq-answer">
        <p>Typically 6–12 months, depending on size and readiness. We help you move fast without cutting corners.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        We use AWS or Azure - are we compliant by default?
        <span class="faq-icon">
        <!-- Plus Icon -->
        <svg class="icon-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <!-- Minus Icon -->
        <svg class="icon-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      </button>
      <div class="faq-answer">
        <p>No. Cloud providers secure the platform, but you're responsible for how it's configured. We help you stay compliant in the cloud.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        How are you different from GRC software tools?
        <span class="faq-icon">
        <!-- Plus Icon -->
        <svg class="icon-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <!-- Minus Icon -->
        <svg class="icon-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 
          2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" 
          stroke="#0F7C23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      </button>
      <div class="faq-answer">
        <p>Tools collect evidence. We provide strategy, guidance, and real-world application. Our team helps you use tools effectively and get results.</p>
      </div>
    </div>
  </div>
</section>

 <!-- FAQs Section Ends -->
<!-- Blog Section Start -->

<section class="award-section blog-section" id="blog">
  <div class="blog-header">
    <div class="blog-left">
      <div class="badge blogs">Insights & Articles</div>
    </div>
    <div class="blog-right">
      <a href="blogs.php" class="view-all">View All Blogs <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
     <path d="M14.1667 5.8335L5 15.0002" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round"/>
     <path d="M9.16663 5.10961C9.16663 5.10961 13.8612 4.71387 14.5737 5.42629C15.2861 6.13873 14.8903 10.8334 14.8903 10.8334" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
     </svg></a>
    </div>
  </div>

  <div class="blog-cards">
    <!-- Blog Card 1 -->
    <div class="blog-card">
      <img src="images/blog1.png" alt="Cybersecurity">
      <div class="blog-tags">
        <span>2 min read</span>
        <span>Risk Management</span>
      </div>
      <h3>5 Common Mistakes in Risk Assessments (And Fixes)</h3>
      <p class="blog-meta">Identify common traps and the practical steps to build assessments that actually reduce risk.</p>
    </div>

    <!-- Blog Card 2 -->
    <div class="blog-card">
      <img src="images/blog2.jpg" alt="Compliance">
      <div class="blog-tags">
        <span>3 min read</span>
        <span>SOC 2</span>
      </div>
      <h3>SOC 2 for SaaS: A Simple Guide for Founders</h3>
      <p class="blog-meta">Practical steps for scaling securely while meeting customer expectations and audit requirements.</p>
    </div>

    <!-- Blog Card 3 -->
    <div class="blog-card">
      <img src="images/blog3.png" alt="Fintech">
      <div class="blog-tags">
        <span>3 min read</span>
        <span>Privacy</span>
      </div>
      <h3>GDPR Simplified for Busy Executives</h3>
      <p class="blog-meta">Key obligations you must know, with a one-page checklist you can act on today.</p>
    </div>
  </div>
</section>

 <!-- Blog Section End -->

 <!-- CTA Section Start -->
  <section class="cta-section" id="contact" style="background-color: #002135; ">
    <h2>Let’s Build Your <br>Digital Fortress</h2>
    <p>Don’t leave compliance to chance. Let’s build a secure, efficient <br>
       GRC program that fits your business and scales with it.</p>
    <a href="contact.php" class="talk-to-an-expert button" style="background-color: 0F7C23;">Request a Free Consultation</a>
  </section>
  <!-- CTA SECTION End -->

  <!-- Footer Section -->
<footer class="footer">
  <div class="footer-top">
    <ul class="footer-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="service.php">Services</a></li>
      <li><a href="blogs.php">Blogs</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="footer-right">
      <a href="https://linkedin.com/company/technorexsol" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
<path d="M16 8.5C17.5913 8.5 19.1174 9.13214 20.2426 10.2574C21.3679 11.3826 22 12.9087 22 14.5V21.5H18V14.5C18 13.9696 17.7893 13.4609 17.4142 13.0858C17.0391 12.7107 16.5304 12.5 16 12.5C15.4696 12.5 14.9609 12.7107 14.5858 13.0858C14.2107 13.4609 14 13.9696 14 14.5V21.5H10V14.5C10 12.9087 10.6321 11.3826 11.7574 10.2574C12.8826 9.13214 14.4087 8.5 16 8.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6 9.5H2V21.5H6V9.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4 6.5C5.10457 6.5 6 5.60457 6 4.5C6 3.39543 5.10457 2.5 4 2.5C2.89543 2.5 2 3.39543 2 4.5C2 5.60457 2.89543 6.5 4 6.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
      <a href="https://instagram.com/technorexsol" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
<path d="M17 2.5H7C4.23858 2.5 2 4.73858 2 7.5V17.5C2 20.2614 4.23858 22.5 7 22.5H17C19.7614 22.5 22 20.2614 22 17.5V7.5C22 4.73858 19.7614 2.5 17 2.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.9997 11.8703C16.1231 12.7025 15.981 13.5525 15.5935 14.2993C15.206 15.0461 14.5929 15.6517 13.8413 16.03C13.0898 16.4082 12.2382 16.5399 11.4075 16.4062C10.5768 16.2726 9.80947 15.8804 9.21455 15.2855C8.61962 14.6905 8.22744 13.9232 8.09377 13.0925C7.96011 12.2619 8.09177 11.4102 8.47003 10.6587C8.84829 9.90716 9.45389 9.29404 10.2007 8.90654C10.9475 8.51904 11.7975 8.37689 12.6297 8.5003C13.4786 8.62619 14.2646 9.02176 14.8714 9.62861C15.4782 10.2355 15.8738 11.0214 15.9997 11.8703Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.5 7H17.51" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 Technorex Sol. All rights reserved.</p>
    <span class="footer-email">contact@technorexsol.com</span>
  </div>

  <div class="footer-bg-text">TECHNOREX</div>
</footer>
<!-- Footer Section End -->

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<script>
document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const faqItem = button.parentElement;
    const isActive = faqItem.classList.contains("active");

    // Remove "active" from all items
    document.querySelectorAll(".faq-item").forEach(item => {
      item.classList.remove("active");
    });

    // Toggle current one only if it wasn’t active
    if (!isActive) {
      faqItem.classList.add("active");
    }
  });
});
</script>


<script src="counter.js"></script>

</body>
</html>