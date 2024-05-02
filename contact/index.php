<?php
define('SAFETORUN', TRUE);
$mytitle = 'REPLACE';
$myMetaDescription = 'REPLACE';
$pageClass = 'contact';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container title mt-30">
  <div class="flex-container justify-center text-center">
    <h1 class="text-blue">Get in Touch</h1>
  </div>
</section>
<section class="container py-100">
  <div class="flex-container">
    <div class="width-50">
      <div class="mr-quarter">
        <h2 class="mb-5">Contact Us</h2>
        <p class="mb-5">We’d love to hear from you. Choose the most convenient method and we’ll get back to you as soon as we can.</p>
        <div class="mb-5">
          <ul class="list-items mt-40 mb-35">
            <li class="list-item pb-6">
              <a href="#">
                <span class="icon yellow">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7 .3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2 .4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                  </svg> </span>
                <span class="list-text">enquiries@pssct.co.uk</span>
              </a>
            </li>
            <li class="list-item mt-6">
              <a href="#">
                <span class="icon yellow">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M497.4 361.8l-112-48a24 24 0 0 0 -28 6.9l-49.6 60.6A370.7 370.7 0 0 1 130.6 204.1l60.6-49.6a23.9 23.9 0 0 0 6.9-28l-48-112A24.2 24.2 0 0 0 122.6 .6l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.3 24.3 0 0 0 -14-27.6z" />
                  </svg> </span>
                <span class="list-text">0800 448 05 03</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="flex-container">
          <h6 class="heading-title">Keep in Touch</h6>
          <div class="social-icons-wrapper ml-30">
            <span>
              <a class="icon social-icon social-icon-facebook repeater-item-c2dc973" href="https://facebook.com/PosSafetySol" target="_blank">
                <span class="screen-only">Facebook</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.7 226.4 209.3 245V327.7h-63V256h63v-54.6c0-62.2 37-96.5 93.7-96.5 27.1 0 55.5 4.8 55.5 4.8v61h-31.3c-30.8 0-40.4 19.1-40.4 38.7V256h68.8l-11 71.7h-57.8V501C413.3 482.4 504 379.8 504 256z" />
                </svg> </a>
            </span>
            <span>
              <a class="icon social-icon social-icon-twitter repeater-item-5d50dfb" href="https://twitter.com/pss_ct" target="_blank">
                <span class="screen-only">Twitter</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                </svg> </a>
            </span>
            <span>
              <a class="icon social-icon social-icon-linkedin repeater-item-48e6980" href="https://www.linkedin.com/company/positivesafetysolutions/" target="_blank">
                <span class="screen-only">Linkedin</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                </svg> </a>
            </span>
          </div>
        </div>

      </div>
    </div>
    <div class="width-50 flex">
      <div class="card light-shadow p-50 justify-center">
        <h4 class="mb-20">Have Questions?</h4>
        <p>Drop us a message below and we’ll get back to you as soon as possible!</p>
      </div>
    </div>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <div class="flex-container width-100 p-10">
      <div class="width-100">
        <form id="form" method="post" enctype="multipart/form-data" action="/contact/">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Contact Number" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="button yellow">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</div>
</body>

</html>