<?php
define('SAFETORUN', TRUE);
$mytitle = 'REPLACE';
$myMetaDescription = 'REPLACE';
$pageClass = 'simple-safety-support';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container title mt-30">
  <div class="flex-container justify-center text-center">
    <h1 class="text-blue">Staff Training</h1>
  </div>
</section>
<section class="container mt-30 mb-40">
  <div class="flex-container">
    <div class="width-33 flex align-center">
      <h3>Training your employees helps to keep your business compliant and your employees competent.</h3>
    </div>
    <div class="width-66 container text pl-50">
      <p>Competence can be described as <strong>the combination of training, skills, experience and knowledge that a person has, and their ability to apply them to perform a task safely</strong>. Other factors, such as attitude and physical ability, can also affect someone’s competence.</p>
      <p>As an employer, you should take account of the competence of employees as this will help you decide what level of <a href="https://www.legislation.gov.uk/ukpga/1974/37/section/2" target="_blank" rel="noopener">information, instruction, training and supervision</a> you need to provide.</p>
      <p>At Positive Safety Solutions we pride ourselves on our service delivery and attention to detail, ensuring that our Clients achieve and maintain&nbsp;<a href="https://www.hse.gov.uk/workers/employers.htm" target="_blank" rel="noopener" class="broken_link">legal compliance</a>, so that their staff and others are kept safe in the workplace and throughout the life of their projects.</p>
      <p>Our&nbsp;<a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank" rel="noopener">CDM</a>,&nbsp;<a href="<?= BASE_URL ?>/fire-safety-consultancy/" target="_blank" rel="noopener">Fire&nbsp;</a>and&nbsp;<a href="<?= BASE_URL ?>/health-safety-consultancy/" target="_blank" rel="noopener">Health &amp; Safety</a>&nbsp;Professionals are experienced across a range of industry sectors<br>including construction, heavy industry, oil and gas, energy generation, food manufacturing and pharmaceuticals, for private organisations, local government, and national government agencies.</p>
      <p>Operating out of Cardiff, we cover all areas up to Birmingham in the West Midlands, down to Plymouth in the South West, from Pembrokeshire in West Wales and East along the M4 corridor to service your business needs efficiently and keep costs to a minimum.</p>
    </div>
  </div>
</section>
<section class="container">
  <div class="flex-container p-10">
    <h5 class="heading">Positive Safety Solutions offer:<br>
      <ul>
        <li>Regulated qualifications from a number of awarding bodies such as ProQualAB and QNUK </li>
        <li>Bespoke training courses in a variety of safety related topics</li>
        <li>Online and face-to-face training delivery
        </li>
        <li>A high-quality service delivered by a very experienced <a href="<?= BASE_URL ?>/about-us/" target="_blank">team</a> of Health &amp; Safety professionals, providing a wide range of knowledge and expertise</li>
      </ul>
    </h5>
  </div>
</section>
<section class="container mt-20 more-info mb-50">
  <div class="flex-container">
    <div class="card blue-red text-white justify-between">
      <div>
        <h3 class="card-title text-center mt-4 mb-20">Fire Safety</h3>
        <ul class="list-items mt-7 mb-10">
          <li class="list-item mb-10">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text">L1 Award in Fire Awareness at Work</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text">L2 Award in Fire Safety for Fire Marshals</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text">Hot works management</span>
          </li>
        </ul>
      </div>
      <div class="flex justify-center mt-7">
        <a class="button more-info" href="<?= BASE_URL ?>/contact/">Contact us</a>
      </div>
    </div>
    <div class="card shadow justify-between">
      <div>
        <h3 class="card-title text-center mb-20">Health & Safety</h3>
        <ul class="list-items mt-10 mb-10">
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L1 Award in H&amp;S in the Workplace</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L2 Award in H&amp;S in the workplace</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L2 Award in Principles of Workplace Risk Assessment</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L2 Award in Principles of Manual Handling</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L2 Award in Principles of COSHH</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text text-green">L2 Award in Manual Handling of Loads at Work</span>
          </li>
        </ul>
      </div>
      <div class="flex justify-center mt-30">
        <a class="button more-info" href="<?= BASE_URL ?>/contact/">Contact us</a>
      </div>
    </div>
    <div class="card blue-red text-white justify-between">
      <div>
        <h3 class="card-title text-center mt-4 mb-20">Construction Safety</h3>
        <ul class="list-items mt-7 mb-10">
          <li class="list-item mb-10">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text">L1 Award in H&amp;S in a construction environment</span>
          </li>
          <li class="list-item mb-10">
            <span class="icon white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z" />
              </svg> </span>
            <span class="list-text">L2 Award in Asbestos Awareness</span>
          </li>
        </ul>
      </div>
      <div class="flex justify-center mt-7">
        <a class="button" href="<?= BASE_URL ?>/contact/">Contact us</a>
      </div>
    </div>
  </div>
</section>
<section class="container pt-50 course-delivery tablet-hide">
  <div class="flex-container">
    <div class="card medium-shadow">
      <div class="mb-20">
        <span class="flex-container mb-15 mt-20 justify-center course-icon"><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512 512" width="512">
            <g>
              <g>
                <g>
                  <g>
                    <path d="m337.009 493.087v-432.049c0-10.446-8.468-18.913-18.914-18.913h-264.14c-10.446 0-18.913 8.468-18.913 18.913v432.049c0 10.446 8.468 18.913 18.913 18.913h264.141c10.445 0 18.913-8.468 18.913-18.913z" fill="#ffc250"></path>
                    <path d="m380.107 42.124h-63.299c10.446 0 18.914 8.468 18.914 18.913v432.049c0 10.446-8.468 18.913-18.914 18.913h63.299c10.446 0 18.914-8.468 18.914-18.913v-432.048c0-10.446-8.468-18.914-18.914-18.914z" fill="#eab14d"></path>
                    <path d="m65.955 474.326v-394.528c0-3.734 3.027-6.76 6.76-6.76h288.632c3.734 0 6.76 3.027 6.76 6.76v394.528c0 3.734-3.027 6.76-6.76 6.76h-288.632c-3.734 0-6.76-3.026-6.76-6.76z" fill="#f5f5f5"></path>
                    <path d="m361.347 73.038h-63.299c3.734 0 6.76 3.027 6.76 6.76v394.528c0 3.734-3.027 6.76-6.76 6.76h63.299c3.734 0 6.76-3.027 6.76-6.76v-394.528c0-3.733-3.026-6.76-6.76-6.76z" fill="#eaeaea"></path>
                    <path d="m257.21 23.538v-9.957c0-7.5-6.08-13.581-13.581-13.581h-53.197c-7.501 0-13.581 6.081-13.581 13.581v9.957c0 3.067-2.487 5.554-5.554 5.554h-22.14c-7.365 0-13.336 5.971-13.336 13.336v30.61h162.419v-30.61c0-7.365-5.971-13.336-13.336-13.336h-22.14c-3.067 0-5.554-2.487-5.554-5.554z" fill="#c2d0da"></path>
                  </g>
                  <g>
                    <g fill="#66b49d">
                      <path d="m105.278 182.792v-59.538c0-6.596 5.348-11.944 11.944-11.944h59.538c6.596 0 11.944 5.348 11.944 11.944v59.538c0 6.596-5.348 11.944-11.944 11.944h-59.538c-6.597 0-11.944-5.348-11.944-11.944z"></path>
                      <path d="m105.278 306.832v-59.538c0-6.596 5.348-11.944 11.944-11.944h59.538c6.596 0 11.944 5.348 11.944 11.944v59.538c0 6.596-5.348 11.944-11.944 11.944h-59.538c-6.597 0-11.944-5.348-11.944-11.944z"></path>
                      <path d="m105.278 430.871v-59.538c0-6.596 5.348-11.944 11.944-11.944h59.538c6.596 0 11.944 5.348 11.944 11.944v59.538c0 6.596-5.348 11.944-11.944 11.944h-59.538c-6.597 0-11.944-5.347-11.944-11.944z"></path>
                    </g>
                    <g>
                      <path d="m141.951 174.344c-.009 0-.017 0-.026 0-3.411-.008-6.646-1.66-8.655-4.417l-9.022-12.39c-2.512-3.45-1.752-8.283 1.698-10.795 3.45-2.511 8.283-1.751 10.794 1.698l5.231 7.185 15.295-20.78c2.53-3.437 7.366-4.171 10.802-1.642 3.437 2.529 4.172 7.366 1.642 10.803l-19.112 25.965c-2.015 2.739-5.247 4.373-8.647 4.373z" fill="#f6f9f9"></path>
                    </g>
                    <g>
                      <path d="m141.95 301.083c-.01 0-.019 0-.028 0-3.411-.009-6.646-1.66-8.654-4.419l-9.02-12.388c-2.512-3.45-1.752-8.283 1.698-10.795 3.45-2.511 8.283-1.751 10.794 1.698l5.231 7.185 15.295-20.78c2.53-3.436 7.366-4.171 10.802-1.642 3.437 2.529 4.172 7.366 1.642 10.803l-19.112 25.965c-2.015 2.741-5.247 4.373-8.648 4.373z" fill="#f6f9f9"></path>
                    </g>
                    <g>
                      <path d="m141.95 422.425c-.009 0-.018 0-.026-.001-3.41-.008-6.646-1.659-8.654-4.415l-9.022-12.392c-2.512-3.45-1.751-8.282 1.699-10.794 3.452-2.512 8.283-1.75 10.794 1.699l5.23 7.184 15.296-20.78c2.53-3.436 7.366-4.171 10.802-1.642 3.437 2.529 4.172 7.366 1.642 10.803l-19.112 25.965c-2.017 2.739-5.248 4.373-8.649 4.373z" fill="#f6f9f9"></path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="m322.692 144.605h-95.515c-4.267 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h95.515c4.267 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#ddeafb"></path>
                    </g>
                    <g>
                      <path d="m274.935 176.892h-47.757c-4.267 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h47.757c4.267 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#ddeafb"></path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="m291.264 268.645h-64.086c-4.267 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h64.086c4.267 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#ddeafb"></path>
                    </g>
                    <g>
                      <path d="m274.935 300.932h-47.757c-4.267 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h47.757c4.267 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#ddeafb"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="m446.91 201.718-7.586-9.994-28.385-17.975-10.911-1.719-145.345 229.673c-3.507 5.538-6.08 11.615-7.616 17.987 17.684.219 33.735 10.383 41.494 26.276 5.104-4.113 9.497-9.037 13.004-14.575z" fill="#fc8086"></path>
                    <path d="m467.43 130.992-12.265-7.767c-9.561-6.055-22.221-3.21-28.273 6.353l-11.247 17.773 3.588 7.233 34.13 21.613 9.165.842 11.254-17.784c6.048-9.558 3.205-22.211-6.352-28.263z" fill="#8c9ba6"></path>
                  </g>
                  <path d="m416.675 146.788h29.205v55.492h-29.205z" fill="#c9e2e7" transform="matrix(.535 -.845 .845 .535 53.087 445.523)"></path>
                  <path d="m288.561 445.967-41.385 33.35c-5.838 4.705-14.32-.666-12.563-7.955l12.454-51.671c17.684.218 33.736 10.383 41.494 26.276z" fill="#7c8b96"></path>
                  <path d="m277.706 431.649 152.359-240.598-13.055-8.267-152.359 240.598c4.78 2.014 9.19 4.807 13.055 8.267z" fill="#fb636f"></path>
                </g>
              </g>
            </g>
          </svg>
        </span>
        <h5 class="text-30 text-center">COURSE DELIVERY</h5>
      </div>
      <div class="text-16 mb-20">
        <p>Managing Health &amp; Safety is a necessity for your business’ moral, financial and legal reasons. However, having a robust and effective Health &amp; Safety training policy can help reduce staff turnover, insurance premiums, lost time, lost contracts and damage to your reputation; it can increase morale, reduce absences, result in greater productivity and ultimately, profitability.</p>
        <p>If you know what training you require and we offer what you need, that’s great; however, if you’re not sure what training course(s) your employees should complete, we can help with that by assisting you to complete a training needs assessment.</p>
        <p>We offer both regulated qualifications that are recognised nationally and which will require some form of formal assessment to be successfully completed by the participants, and bespoke courses that will cover similar content to the regulated qualifications, but which are not ‘recognised’ and are not usually assessed, unless this is requested by you to help determine your employee competence.</p>
      </div>
      <h4 class="mb-20">Training course options:</h4>
      <ul class="text-16">
        <li>Regulated qualifications (Levels 1-3)</li>
        <li>Bespoke training courses to suit your specific business needs</li>
        <li>Carried out at our training centre near Cardiff</li>
        <li>Carried out in your chosen venue</li>
        <li>Carried out online</li>
        <li>Training date(s) to suit you</li>
        <li>A range of open courses that you can book for individuals or groups</li>
        <li>Open course dates are <a title="Positive Safety Solutions open courses" href="https://www.linkedin.com/company/positivesafetysolutions/" target="_blank" rel="noopener">here.</a></li>
      </ul>
      <div>
        <p>If you are unsure as to what you require, book a consultation with one of our H&amp;S professionals for a quick review of your current training needs situation relevant to your industry.</p>
        <p><a href="<?= BASE_URL ?>/contact/" target="_blank" rel="noopener">Contact</a>&nbsp;us today to discuss how we can help ensure you are <b>‘Doing It Better’.</b></p>
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</section>
<!-- https://swiperjs.com/get-started -->
<section class="container title mt-40">
  <div class="flex-container justify-center text-center p-10">
    <h4 class="text-55">Course overviews</h4>
  </div>
</section>
<section class="container client-swiper">
  <div class="flex-container">
    <div class="wrapper">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-Mental-health-first-aid.svg" alt="L2 First Aid for Mental Health">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-Mental-health-FA-youth.svg" alt="L2 First Aid for Youth Mental Health">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L3-Mental-health-FA-supervisor-1.svg" alt="L3 Supervising First Aid for Mental Health">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L1-fire-safety-awareness.svg" alt="L1 Fire Safety Awareness">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-Fire-marshal-.svg" alt="L2 Fire Marshal Training">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L1-HS-workplace.svg" alt="L1 H&amp;S in the Workplace">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-HS-workplace.svg" alt="L2 H&amp;S in the Workplace">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-MH-in-workplace-1.svg" alt="L2 Manual Handling in the Workplace">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-MH-loads-workplace.svg" alt="L2 Manual Handling of Loads in the Workplace">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-COSHH.svg" alt="L2 Principles of COSHH">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-workplace-RA.svg" alt="L1 Principles of Workplace Risk Assessment">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L1-HS-Construction.svg" alt="L1 H&amp;S in the Construction Environment">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L2-Asb-Awa.svg" alt="L2 Asbestos Awareness">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex justify-center">
              <img src="<?= BASE_URL ?>/assets/img/staff-training/L1-Mental-Health-Awareness.svg" alt="L1 Awareness of First Iad for Mental Health">
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/assets/js/swiper.js"></script>
</body>

</html>