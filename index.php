<?php
define('SAFETORUN', TRUE);
$mytitle = 'REPLACE';
$myMetaDescription = 'REPLACE';
$pageClass = 'home';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container">
  <div class="flex-container justify-center title-padding">
    <h1 class="text-blue">Doing It Better</h1>
  </div>
</section>
<section class="container section-padding">
  <div class="flex-container">
    <div class="width-50 pr-5">
      <h3 class="mb-5">We offer CDM, Fire Safety and Health & Safety Consultancy, and a range of regulated NVQ qualifications and bespoke training tailored to suit your business needs.</h3>
      <h3 class="text-blue">Get in touch to discuss how we can help you to do it better.</h3>
    </div>
    <div class="width-50 container text text-16 border-blue pl-40 pr-20">
      <p>Positive Safety Solutions provide a range of professional safety consultancy services and NVQ qualifications.</p>
      <p>Consultancy services include general Health &amp; Safety, Construction Health &amp; Safety, CDM consultancy including Principal Designer services, and Fire Safety consultancy ranging from fire risk assessment to Fire Safety Policy and Procedures Development/Review. We offer a number of Simple Safety Support retained packages for companies that want to get it right, but that operate in lower risk industries.</p>
      <p>We also provide a range of regulated qualifications (NVQs) from levels 3 to 7 in Health &amp; Safety, construction site supervision and management, construction contracting operations, mental health first aid, and teaching and training.</p>
      <p>With over 60 years in health and safety roles (combined – we’re not that old!), and a unique mix of skills and experience across a broad range of industry sectors, we believe we offer a service that will make you want to come back to us, because we can help ensure that you are ‘Doing It Better’.</p>
    </div>
  </div>
</section>
<section class="container mt-30">
  <div class="flex-container">
    <div class="card blue-red text-white">
      <h3 class="card-title text-center mb-10"><a href="<?= BASE_URL ?>/consultancy/">Consultancy</a></h3>
      <ul class="list-items animate">
        <li class="list-item">
          <a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z" />
              </svg> </span>
            <span class="list-text">CDM Consultancy</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/fire-safety-consultancy/" target="_blank">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M323.6 51.2c-20.8 19.3-39.6 39.6-56.2 60C240.1 73.6 206.3 35.5 168 0 69.7 91.2 0 210 0 281.6 0 408.9 100.3 512 224 512s224-103.2 224-230.4c0-53.3-52-163.1-124.4-230.4zm-19.5 340.7C282.4 407 255.7 416 226.9 416 154.7 416 96 368.3 96 290.8c0-38.6 24.3-72.6 72.8-130.8 6.9 8 98.8 125.3 98.8 125.3l58.6-66.9c4.1 6.9 7.9 13.6 11.3 20 27.4 52.2 15.8 119-33.4 153.4z" />
              </svg> </span>
            <span class="list-text">Fire Safety Consultancy</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/health-safety-consultancy/" target="_blank">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm144 418c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V118c0-3.3 2.7-6 6-6h42v36c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-36h42c3.3 0 6 2.7 6 6z" />
              </svg> </span>
            <span class="list-text">Health &amp; Safety</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/simple-safety-support/" target="_blank">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1 .1-.2 .3-.3 .4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7 .1-.1 .3-.1 .4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z" />
              </svg> </span>
            <span class="list-text">Simple Safety Support</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="card shadow">
      <h3 class="card-title text-center text-black mb-10"><a href="<?= BASE_URL ?>/nvqs/">NVQs &amp; Training</a></h3>
      <ul class="list-items text-blue animate">
        <li class="list-item">
          <a href="<?= BASE_URL ?>/nvqs/#nvq-options">

            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M480 288c0-80.3-49.3-148.9-119.2-177.6L320 192V80a16 16 0 0 0 -16-16h-96a16 16 0 0 0 -16 16v112l-40.8-81.6C81.3 139.1 32 207.8 32 288v64h448zm16 96H16a16 16 0 0 0 -16 16v32a16 16 0 0 0 16 16h480a16 16 0 0 0 16-16v-32a16 16 0 0 0 -16-16z" />
              </svg> </span>
            <span class="list-text">Construction NVQs</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/nvqs/#nvq-options">

            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm144 418c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V118c0-3.3 2.7-6 6-6h42v36c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-36h42c3.3 0 6 2.7 6 6z" />
              </svg> </span>
            <span class="list-text">Health &amp; Safety NVQs</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/nvqs/#nvq-options">

            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M272 240a16 16 0 1 0 16 16A16 16 0 0 0 272 240zm-64-64a16 16 0 1 0 16 16A16 16 0 0 0 208 176zm301.2 99c-20.9-47.1-48.4-151.7-73.1-186.8A207.9 207.9 0 0 0 266.1 0H192C86 0 0 86 0 192A191.2 191.2 0 0 0 64 334.8V512H320V448h64a64 64 0 0 0 64-64V320H480A32 32 0 0 0 509.2 275zM368 240H355.9c-28.5 0-42.8 34.5-22.6 54.6l8.6 8.6a16 16 0 1 1 -22.6 22.6l-8.6-8.6C290.5 297.1 256 311.4 256 339.9V352a16 16 0 0 1 -32 0V339.9c0-28.5-34.5-42.8-54.6-22.6l-8.6 8.6a16 16 0 0 1 -22.6-22.6l8.6-8.6c20.2-20.2 5.9-54.6-22.6-54.6H112a16 16 0 0 1 0-32h12.1c28.5 0 42.8-34.5 22.6-54.6l-8.6-8.6a16 16 0 0 1 22.6-22.6l8.6 8.6c20.2 20.2 54.6 5.9 54.6-22.6V96a16 16 0 0 1 32 0v12.1c0 28.5 34.5 42.8 54.6 22.6l8.6-8.6a16 16 0 0 1 22.6 22.6l-8.6 8.6C313.1 173.5 327.4 208 355.9 208H368a16 16 0 0 1 0 32z" />
              </svg> </span>
            <span class="list-text">Mental Health First Aid</span>
          </a>
        </li>
        <li class="list-item">
          <a href="<?= BASE_URL ?>/staff-training/">

            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M208 352c-2.4 0-4.8 .4-7.1 1.1C188 357.3 174.4 360 160 360c-14.4 0-28-2.7-41-6.9-2.3-.7-4.7-1.1-7.1-1.1C49.9 352-.3 402.5 0 464.6 .1 490.9 21.7 512 48 512h224c26.3 0 47.9-21.1 48-47.4 .3-62.1-49.9-112.6-112-112.6zm-48-32c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zM592 0H208c-26.5 0-48 22.3-48 49.6V96c23.4 0 45.1 6.8 64 17.8V64h352v288h-64v-64H384v64h-76.2c19.1 16.7 33.1 38.7 39.7 64H592c26.5 0 48-22.3 48-49.6V49.6C640 22.3 618.5 0 592 0z" />
              </svg> </span>
            <span class="list-text">Staff Training</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="container py-100 why-choose">
  <div class="flex-container">
    <div class="pr-50 tablet-45 tablet-text-13">
      <h2>Why Choose Us?</h2>
      <p>Positive Safety Solutions was founded by three Health & Safety professionals with an enviable list of qualifications, skills and knowledge and decades of real industry experience, ensuring that the services you require are the best that we can provide.</p>
    </div>
    <div class="pl-50 tablet-55 tablet-text-13 text-black">
      <div class="flex width-100">
        <div class="">
          <a href="#" class="icon bg-yellow white animation-" tabindex="-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5 .4 5.1 .8 7.7 .8 26.5 0 48-21.5 48-48s-21.5-48-48-48z" />
            </svg> </a>
        </div>
        <div class="content width-100 mb-15">
          <h5 class="title">
            <a href="#">
              Industry Professionals </a>
          </h5>
          <p class="description">
            All of our consultants hold professional body memberships in their respective specialisms, up to and including Chartered Fellowship. We believe this will give you confidence that the services we provide to you are exemplary.
          </p>
        </div>
      </div>
      <div class="flex width-100 mb-15">
        <div class="">
          <a href="#" class="icon bg-yellow white animation-" tabindex="-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M256 8C119 8 8 119 8 256S119 504 256 504 504 393 504 256 393 8 256 8zm92.5 313h0l-20 25a16 16 0 0 1 -22.5 2.5h0l-67-49.7a40 40 0 0 1 -15-31.2V112a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16V256l58 42.5A16 16 0 0 1 348.5 321z" />
            </svg> </a>
        </div>
        <div class="content width-100">
          <h5 class="title">
            <a href="#">
              Experienced Trainers </a>
          </h5>
          <p class="description">
            All our trainers hold a Level 3 Award in Education and Training as a minimum and have decades of teaching/training experience in H&amp;S roles and in Higher Education, helping to provide excellent training services. </p>
        </div>
      </div>

      <div class="flex width-100 mb-15">
        <div class="">
          <a href="#" class="icon bg-yellow white animation-" tabindex="-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M458.6 255.9l46-45c13.7-13 7.3-36-10.7-40.3l-62.7-16 17.7-62c5-17.8-11.8-34.7-29.7-29.7l-62 17.7-16-62.7C337.1 .2 313.8-6.3 301 7.2L256 53.6 211 7.2c-12.6-13.4-36-7.2-40.3 10.7l-16 62.7-62-17.7C74.9 57.9 58.1 74.7 63 92.6l17.7 62-62.7 16C.1 174.9-6.3 197.9 7.4 210.9l46 45-46 45c-13.7 13-7.3 36 10.7 40.3l62.7 16-17.7 62c-5 17.8 11.8 34.7 29.7 29.7l62-17.7 16 62.7c4.4 18.6 27.7 24 40.3 10.7L256 458.6l45 46c12.5 13.5 36 7.5 40.3-10.7l16-62.7 62 17.7c17.8 5 34.7-11.8 29.7-29.7l-17.7-62 62.7-16c18-4.3 24.4-27.4 10.7-40.3l-46-45z" />
            </svg> </a>
        </div>
        <div class="content width-100">
          <h5 class="title">
            <a href="#">
              Regulated Qualifications </a>
          </h5>
          <p class="description">
            We offer a variety of qualifications in Health &amp; Safety, Construction Supervision and Management, Teaching/Training and Mental Health first aid which are regulated by Ofqual (National Regulator) and accredited by Proqual (Awarding Organisation). </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
<!-- Animate Script -->
<script src="<?= BASE_URL ?>/assets/js/animate.js"></script>
</body>

</html>