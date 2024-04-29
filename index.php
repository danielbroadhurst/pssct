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

<section class="container title">
  <div class="flex-container justify-center">
    <h1 class="text-blue">Doing It Better</h1>
  </div>
</section>
<section class="container we-offer">
  <div class="flex-container">
    <div>
      <h3>We offer CDM, Fire Safety and Health & Safety Consultancy, and a range of regulated NVQ qualifications and bespoke training tailored to suit your business needs.</h3>
      <h3 class="text-blue">Get in touch to discuss how we can help you to do it better.</h3>
    </div>
    <div>
      <p>Positive Safety Solutions provide a range of professional safety consultancy services and NVQ qualifications.

        Consultancy services include general Health & Safety, Construction Health & Safety, CDM consultancy including Principal Designer services, and Fire Safety consultancy ranging from fire risk assessment to Fire Safety Policy and Procedures Development/Review. We offer a number of Simple Safety Support retained packages for companies that want to get it right, but that operate in lower risk industries.

        We also provide a range of regulated qualifications (NVQs) from levels 3 to 7 in Health & Safety, construction site supervision and management, construction contracting operations, mental health first aid, and teaching and training.

        With over 60 years in health and safety roles (combined – we’re not that old!), and a unique mix of skills and experience across a broad range of industry sectors, we believe we offer a service that will make you want to come back to us, because we can help ensure that you are ‘Doing It Better’..</p>
    </div>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <div class="card">
      <h3 class="card-title"><a href="https://pssct.co.uk/consultancy/">Consultancy</a></h3>
      <ul class="card-list">
        <li>
          <a href="http://pssct.co.uk/cdm-consultancy/" target="_blank">
            <span class="icon">
              <i aria-hidden="true" class="far fa-building"></i> </span>
            <span class="text">CDM Consultancy</span>
          </a>
        </li>
        <li>
          <a href="http://pssct.co.uk/fire-safety-consultancy/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="fas fa-fire-alt"></i> </span>
            <span class="text">Fire Safety Consultancy</span>
          </a>
        </li>
        <li>
          <a href="http://pssct.co.uk/health-safety-consultancy/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="far fa-clipboard"></i> </span>
            <span class="text">Health &amp; Safety</span>
          </a>
        </li>
        <li>
          <a href="https://pssct.co.uk/simple-safety-support/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="fas fa-handshake"></i> </span>
            <span class="text">Simple Safety Support</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="card">
      <h3 class="card-title"><a href="https://pssct.co.uk/consultancy/">Consultancy</a></h3>
      <ul class="card-list">
        <li>
          <a href="http://pssct.co.uk/cdm-consultancy/" target="_blank">
            <span class="icon">
              <i aria-hidden="true" class="far fa-building"></i> </span>
            <span class="text">CDM Consultancy</span>
          </a>
        </li>
        <li>
          <a href="http://pssct.co.uk/fire-safety-consultancy/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="fas fa-fire-alt"></i> </span>
            <span class="text">Fire Safety Consultancy</span>
          </a>
        </li>
        <li>
          <a href="http://pssct.co.uk/health-safety-consultancy/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="far fa-clipboard"></i> </span>
            <span class="text">Health &amp; Safety</span>
          </a>
        </li>
        <li>
          <a href="https://pssct.co.uk/simple-safety-support/" target="_blank">

            <span class="icon">
              <i aria-hidden="true" class="fas fa-handshake"></i> </span>
            <span class="text">Simple Safety Support</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <div>
      <h2>Why Choose Us?</h2>
      <p>Positive Safety Solutions was founded by three Health & Safety professionals with an enviable list of qualifications, skills and knowledge and decades of real industry experience, ensuring that the services you require are the best that we can provide.</p>
    </div>
    <div>
      <div class="widget-container">
        <div class="icon">
          <a href="#" class="icon animation-" tabindex="-1">
            <i aria-hidden="true" class="fas fa-crown"></i> </a>
        </div>
        <div class="content">
          <h5 class="title">
            <a href="#">
              Industry Professionals </a>
          </h5>
          <p class="description">
            All of our consultants hold professional body memberships in their respective specialisms, up to and including Chartered Fellowship. We believe this will give you confidence that the services we provide to you are exemplary.
          </p>
        </div>
      </div>
      <div class="widget-container">
        <div class="wrapper">
          <div class="icon">
            <a href="#" class="icon animation-" tabindex="-1">
              <i aria-hidden="true" class="fas fa-clock"></i> </a>
          </div>
          <div class="content">
            <h5 class="title">
              <a href="#">
                Experienced Trainers </a>
            </h5>
            <p class="description">
              All our trainers hold a Level 3 Award in Education and Training as a minimum and have decades of teaching/training experience in H&amp;S roles and in Higher Education, helping to provide excellent training services. </p>
          </div>
        </div>
      </div>
      <div class="widget-container">
        <div class="wrapper">
          <div class="icon">
            <a href="#" class="icon animation-" tabindex="-1">
              <i aria-hidden="true" class="fas fa-certificate"></i> </a>
          </div>
          <div class="content">
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
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</div>
</body>

</html>