<?php
define('SAFETORUN', TRUE);
$mytitle = 'REPLACE';
$myMetaDescription = 'REPLACE';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container title">
  <div class="flex-container justify-center">
    <h1 class="text-blue">CDM, Fire Safety, and Health & Safety Consultancy</h1>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <div>
      <h3>We support Clients to not only achieve legal compliance, but to meet industry best practice where possible.</h3>
    </div>
    <div>
      <p>At Positive Safety Solutions we pride ourselves on our service delivery and attention to detail, ensuring that our Clients achieve and maintain&nbsp;<a href="https://www.hse.gov.uk/workers/employers.htm" target="_blank" rel="noopener" class="broken_link">legal compliance</a>, so that their staff and others are kept safe in the workplace and throughout the life of their projects.</p>
      <p>Positive Safety Solutions can provide the tools and assistance you need to ensure you are compliant with all the&nbsp;<a href="https://www.legislation.gov.uk/uksi/2015/51/contents/made" target="_blank" rel="noopener">CDM</a>,<a href="https://www.legislation.gov.uk/uksi/2005/1541/contents/made" target="_blank" rel="noopener">&nbsp;Fire Safety</a>&nbsp;and&nbsp;<a href="https://www.legislation.gov.uk/ukpga/1974/37/contents" target="_blank" rel="noopener">Health&nbsp;&amp; Safety</a>&nbsp;legislative requirements relevant to your project<br>and business.</p>
      <p>Our&nbsp;<a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank" rel="noopener">CDM</a>,&nbsp;<a href="<?= BASE_URL ?>/fire-safety-consultancy/" target="_blank" rel="noopener">Fire&nbsp;</a>and&nbsp;<a href="<?= BASE_URL ?>/health-safety-consultancy/" target="_blank" rel="noopener">Health &amp; Safety</a>&nbsp;Professionals are experienced across a range of industry sectors<br>including construction, heavy industry, oil and gas, energy generation, food manufacture and pharmaceuticals, for private organisations, local government and national government agencies.</p>
      <p>Operating out of Cardiff, we cover all areas up to Birmingham in the West Midlands, down to Plymouth in the South West, from Pembrokeshire in West Wales and East along the M4 corridor to service your business needs efficiently and keep costs to a minimum.</p>
    </div>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <h5>Positive Safety Solutions offer:<br>
      <ul>
        <li>Independent and practical <a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank">CDM</a>, <a href="<?= BASE_URL ?>/fire-safety-consultancy/" target="_blank">Fire Safety </a> and <a href="<?= BASE_URL ?>/health-safety-consultancy/" target="_blank">Health &amp; Safety </a> consultancy support aligned to your business objectives</li>
        <li>A high-quality service delivered by a very experienced <a href="<?= BASE_URL ?>/about-us/" target="_blank">team</a> of Health &amp; Safety professionals, providing a wide range of knowledge and expertise</li>
        <li>A dedicated Consultant who will be your main point of contact for the duration of your contract with us. Your consultant is further supported by our compliance team to ensure consistency of service and ongoing support</li>
      </ul>
    </h5>
  </div>
</section>
<section class="container">
  <div class="flex-container">
    <div class="card">
      <h3 class="card-title">Fire Safety Consultancy</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Risk Assessment (Life Safety)</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Safety Management plan development/review</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire safety policy and procedures development/review</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Safety Training</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/fire-safety-consultancy/" class="button">More information</a>
      </div>
    </div>
    <div class="card">
      <h3 class="card-title">Health & Safety</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Retained Consultancy</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>One-Off Projects</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>SSIP Assistance</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Review of company H&amp;S Systems (Gap Analysis)</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Risk Assessment</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Safety Inspections &amp; Audits</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Policies &amp; Procedures</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Training</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/fire-safety-consultancy/" class="button">More information</a>
      </div>
    </div>
    <div class="card">
      <h3 class="card-title">CDM Consultancy</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Principal Designer</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>CDM Advisor</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>CDM Compliance Inspections</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/cdm-consultancy/" class="button">More information</a>
      </div>
    </div>
  </div>
</section>
<!-- This is duplicated -->
<section class="container">
  <div class="flex-container">
    <div class="card">
      <h3 class="card-title">Fire Safety Consultancy</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Risk Assessment (Life Safety)</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Safety Management plan development/review</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire safety policy and procedures development/review</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Fire Safety Training</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/fire-safety-consultancy/" class="button">More information</a>
      </div>
    </div>
    <div class="card">
      <h3 class="card-title">Health & Safety</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Retained Consultancy</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>One-Off Projects</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>SSIP Assistance</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Review of company H&amp;S Systems (Gap Analysis)</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Risk Assessment</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Safety Inspections &amp; Audits</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Policies &amp; Procedures</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Training</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/fire-safety-consultancy/" class="button">More information</a>
      </div>
    </div>
    <div class="card">
      <h3 class="card-title">CDM Consultancy</h3>
      <ul>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>Principal Designer</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>CDM Advisor</span>
        </li>
        <li>
          <span>
            <i aria-hidden="true" class="fas fa-check"></i> </span>
          <span>CDM Compliance Inspections</span>
        </li>
      </ul>
      <div>
        <a href="<?= BASE_URL ?>/cdm-consultancy/" class="button">More information</a>
      </div>
    </div>
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</div>
</body>

</html>