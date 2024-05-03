<?php
define('SAFETORUN', TRUE);
$mytitle = 'Health & Safety Consultancy Services UK | PSSCT';
$myMetaDescription = 'We offer a wide range of health & safety consultancy services across the UK. Our team of experts are equipped to help you maintain a safe & healthy workplace.';
$pageClass = 'health-safety-consultancy';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container title mt-30">
  <div class="flex-container justify-center text-center">
    <h1 class="text-blue">Health & Safety Consultancy</h1>
  </div>
</section>
<section class="container mt-30 mb-40">
  <div class="flex-container">
    <div class="width-44 flex align-center">
      <h3>Having a robust and effective Health & Safety management system in place can reduce costs and can increase productivity and ultimately, profitability.
        Get in touch today to see how we can help improve your Health & Safety management.</h3>
    </div>
    <div class="width-55 container text pl-50">
      <h2 class="text-40">Health & Safety Consultancy Services UK</h2>
      <div class="text-16">
        <p class="mb-8">Managing Health and Safety is a necessity for your business for moral, financial and legal reasons. We provide a variety of health &amp; safety consultancy services to all types of businesses to ensure compliance with legal duties and to help them achieve improvements in health and safety performance.</p>
        <p>There are multiple pieces of legislation that may apply to your business such as <a href="https://www.legislation.gov.uk/uksi/1999/3242/contents" target="_blank" rel="noopener">The Management of Health &amp; Safety at Work Regulations</a>, <a href="https://www.legislation.gov.uk/uksi/2013/1471/contents/made" target="_blank" rel="noopener">RIDDOR</a>, <a href="https://www.legislation.gov.uk/uksi/1998/2306/contents/made" target="_blank" rel="noopener">PUWER</a>, <a href="https://www.legislation.gov.uk/uksi/2004/3386/contents" target="_blank" rel="noopener">COSHH</a>, <a href="https://www.legislation.gov.uk/uksi/1992/2966/contents/made" target="_blank" rel="noopener">PPE</a>, <a href="https://www.legislation.gov.uk/uksi/1981/917/contents/made" target="_blank" rel="noopener">First Aid</a> and <a href="https://www.legislation.gov.uk/uksi/1992/2792/contents" target="_blank" rel="noopener">Display Screen Equipment (DSE)</a> Regulations, all of which stem from the <a href="https://www.legislation.gov.uk/ukpga/1974/37/contents" target="_blank" rel="noopener">Health and safety at Work etc. Act 1974</a>.&nbsp;</p>
        <p class="mb-8">Our experienced and knowledgeable consultants provide clear, industry specific guidance, assistance and information to your business and can provide document templates and training where needed to ensure that your business is both compliant and improving going forward.&nbsp;</p>
        <p class="mb-8"><a href="<?= BASE_URL ?>/contact" target="_blank" rel="noopener">Contact</a><span style="font-style: inherit; font-weight: inherit;">&nbsp;us today to discuss how we can help ensure you are ‘Doing it better’.</p>
      </div>
    </div>
  </div>
</section>
<section class="container health-safety">
  <div class="flex-container p-20">
    <h4>Health & Safety Consultancy Services we provide include:</h4>
  </div>
  <div class="flex-container pl-20 pr-20 pb-20">
    <div class="toggle text-16">
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="1" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Risk Assessment </a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>

        <div class="tab-content border" data-tab="1" role="region" aria-labelledby="tab-title-1581">
          <div class="p-15">
            <p>We can assist with completing a variety of&nbsp;<a href="https://www.legislation.gov.uk/uksi/1999/3242/regulation/3" target="_blank">risk assessments</a>&nbsp;such as general workplace, task specific, manual handling, CoSHH, DSEAR, DSE, etc.<br>We can also provide templates and advice on how you can do this yourself, however we do advise that if you are conducting risk assessments, you must ensure you are&nbsp;<a href="https://www.hse.gov.uk/competence/what-is-competence.htm" target="_blank">competent&nbsp;</a>to do so.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="2" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Policies and Procedures Development and Review</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="2" role="region" aria-labelledby="tab-title-1582">
          <div class="p-15">
            <p>Every employer shall make and give effect to such&nbsp;<a href="https://www.legislation.gov.uk/uksi/1999/3242/regulation/5" target="_blank" rel="noopener">arrangements&nbsp;</a>as are appropriate, having regard to the nature of his activities and the size of his undertaking, for the effective planning, organisation, control, monitoring and review of the preventive and protective measures.</p>
            <p>Where the employer employs five or more employees, he shall record the arrangements.</p>
            <p>Whether you are a micro business, or have 5 or more employees, including directors, we can assist you with the development of your Health &amp; Safety arrangements. This could be as simple as having a written H&amp;S policy, or could include the development of detailed, individual policy arrangements and procedures for some of your particular business practices.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="3" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Safety Inspections of the Workplace</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="3" role="region" aria-labelledby="tab-title-1583">
          <div class="p-15">
            <p><a href="https://www.hse.gov.uk/involvement/inspections.htm" target="_blank" rel="noopener">Safety inspections of the workplace</a> can take many forms and serve a number of purposes, for example:</p>
            <ul>
              <li>safety tours – general inspections of the workplace&nbsp;</li>
              <li>safety sampling – systematic sampling of particular dangerous activities, processes or areas</li>
              <li>safety surveys – general inspections of particular dangerous activities, processes or areas</li>
              <li>incident inspections – carried out after an accident causing a fatality, injury, or near miss, which could have resulted in an injury, or case of ill health and has been reported to the health and safety enforcing authority and;</li>
              <li>construction site inspections and CDM compliance inspections which relate to construction projects.</li>
            </ul>
            <p>We can assist with any or all of these inspections to help ensure your arrangements are working as planned.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="4" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Contractor Competence Review</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="4" role="region" aria-labelledby="tab-title-1584">
          <div class="p-15">
            <p>If you have a contractor working for you, then both you and the contractor will have duties under health and safety law to ensure the <a href="https://www.hse.gov.uk/toolbox/workers/contractors.htm" target="_blank" rel="noopener" class="broken_link">contractor’s competence</a>. This also applies when a contractor employs subcontractors.</p>
            <p>If you are contracting construction work you have duties as a client under the Construction Design and Management Regulations 2015 (CDM).</p>
            <p>A client is anyone who has construction work carried out for them. Please see the CDM consultancy section of this website for more information relating to your duties under the CDM Regulations.</p>
            <p>If you are engaging contractors to carry out works on your behalf, or using subcontractors on a construction project you are running, we can assist you to ensure your legal obligations are met and to ensure the contractor you are engaging is competent to carry out the work safely.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="5" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Training (both in house and regulated)</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="5" role="region" aria-labelledby="tab-title-1585">
          <div class="p-15">
            <p>Positive Safety Solutions offers in-house H&amp;S training in topics such as H&amp;S awareness, fire safety awareness, manual handling, work at height awareness, COSHH awareness, etc. We also offer regulated qualifications in a variety of topics which can be found on our&nbsp;<a href="<?= BASE_URL ?>/nvqs/" target="_blank" rel="noopener">NVQ qualifications</a>&nbsp;pages.</p>
            <p>We can provide training both at your premises, provided you have adequate space and facilities available, or can organise a venue to facilitate the training you need.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="6" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Accident Investigation</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="6" role="region" aria-labelledby="tab-title-1586">
          <div class="p-15">
            <p>In any business or organisation things don’t always go to plan. In the unfortunate event of an incident or Accident, Health &amp; Safety&nbsp;<a href="https://www.hse.gov.uk/managing/delivering/check/investigating-accidents-incidents.htm" target="_blank" rel="noopener">investigations</a>&nbsp;form an essential part of the monitoring process that you are required to carry out. Incidents, including near misses, can tell you a lot about how things actually are in reality. An investigation can help you identify why the existing risk control measures failed and what improvements or additional measures are needed so that you can ensure they do not reoccur.</p>
            <p>The process involved in investigating serious accidents may involve:</p>
            <ul>
              <li>Inspection of the accident/incident location and recording of evidence</li>
              <li>Inspection of site health and safety documentation in relation to the accident/incident</li>
              <li>Taking witness statements</li>
              <li>Interviewing injured parties</li>
              <li>Preparation of a full report indicating the root causes of the accident/incident and any recommendations required</li>
            </ul>
            <p>We can advise on accident investigation processes and procedures you can implement, or can carry out investigations on your behalf.&nbsp;</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="7" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Assistance with PQQ and SSIP applications </a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="7" role="region" aria-labelledby="tab-title-1587">
          <div class="p-15">
            <p>As mentioned above, if you are engaging a contractor to carry out works for your business, you have a responsibility to ensure they are competent to do so. A process based on the requirements of PAS 91 known as&nbsp;<a href="https://www.designingbuildings.co.uk/wiki/Pre-qualification_questionnaire_PQQ_for_construction_contracts" target="_blank" rel="noopener">PQQ&nbsp;</a>and which includes a H&amp;S section, consists of the contractor completing and submitting a questionnaire and supporting documents to the organisation, where they are reviewed against a standard and if successful, the contractor is added to an approved contractor list for a certain period, but usually no longer than 12 months. The process is complicated for the client organisation due to the H&amp;S section, as the reviewer should be a H&amp;S competent person to ensure the review is suitable and sufficient. If you are not familiar with it, the process can be confusing, frustrating and time consuming.&nbsp;</p>
            <p><span style="font-style: inherit; font-weight: inherit;">Numerous large organisations that use hundreds, if not thousands of contractors, such as local authorities and private businesses, may not have the in-house resource to carry out the H&amp;S section of the PQQ review on all of the contractors on their approved list, therefore they require contractors that wish to work for them, to hold an&nbsp;<a href="https://ssip.org.uk/about-ssip/" target="_blank" rel="noopener" style="font-style: inherit; font-weight: inherit; background-color: rgb(255, 255, 255);">SSIP&nbsp;</a><span style="font-style: inherit; font-weight: inherit;">accreditation. This can be with any one of a number of SSIP providers such as Chas, SMAS, Constructionline, FASET, etc.<span style="font-style: inherit; font-weight: inherit;">&nbsp;<span style="font-style: inherit; font-weight: inherit;">A complete list of current providers can be found on the SSIP website linked above.</p>
            <p>We are experienced in the SSIP process and can assist you to gain accreditation with your chosen provider, or multiple providers if you choose. Depending on the level and extent of your existing H&amp;S management system, this can be as little as reviewing and updating some existing documents, up to providing almost all of the documentation and evidence you require to successfully get through the audit process.</p>
            <p>Get in touch today and get your SSIP accreditation application rolling.</p>
          </div>
        </div>
      </div>
      <div class="toggle-item">
        <div class="tab-title bold border p-15" data-tab="8" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">Simple Safety Support </a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="8" role="region" aria-labelledby="tab-title-1588">
          <div class="p-15">
            <p>We offer a number of retained support packages we have developed called <a href="<?= BASE_URL ?>/simple-safety-support/">Simple Safety Support</a>. These are more suitable for organisations that might be considered a ‘low risk’ industry, such as cleaning companies, office based works, retail businesses, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container pt-50 pb-100 health-cta">
  <div class="flex-container column">
    <div class="text-16 mb-20">
      <p class="mb-8">If you are unsure as to what you require,&nbsp;<a href="https://www.pssct.co.uk/contact/" target="_blank" rel="noopener">book a consultation</a>&nbsp;with one of our H&amp;S professionals for a quick review of your current H&amp;S situation.&nbsp;</p>
      <p class="mb-8">We offer both one off services and on-going support and guidance to clients with an annual retained service.</p>
    </div>
    <h4 class="mb-40">In addition to Health &amp; Safety Consultancy services in UK, we offer <strong><a title="fire safety consultancy services uk" href="<?= BASE_URL ?>/fire-safety-consultancy/">Fire Safety</a></strong> and <strong><a title="cdm consultancy services" href="<?= BASE_URL ?>/cdm-consultancy/">CDM consultancy services</a></strong> to provide you with a full range of business and project needs.​</h4>
    <div class="flex cards">
      <div class="service-card width-50">
        <div class="flex column align-center width-100">
          <figure><a href="<?= BASE_URL ?>/fire-safety-consultancy/" tabindex="-1"><img decoding="async" width="512" height="512" src="<?= BASE_URL ?>/assets/img/fire.svg" alt=""></a></figure>
          <div class="content">
            <h3 class="text-22 text-center mb-10"><a href="<?= BASE_URL ?>/fire-safety-consultancy/">Fire Safety</a></h3>
            <p class="description">Check out our Fire Safety Consultancy Services</p>
          </div>
        </div>
      </div>
      <div class="service-card width-50">
        <div class="flex column align-center width-100">
          <figure><a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank" tabindex="-1"><img decoding="async" width="512" height="512" src="<?= BASE_URL ?>/assets/img/office-building.svg" alt=""></a></figure>
          <div class="content">
            <h3 class="text-22 text-center mb-10"><a href="<?= BASE_URL ?>/cdm-consultancy/" target="_blank">CDM</a></h3>
            <p class="description">Check out our CDM Consultancy Services</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container health-safety">
  <div class="flex-container p-20">
    <h4>Common FAQ's about Health & Safety Consultancy</h4>
  </div>
  <div class="flex-container pl-20 pr-20 pb-20">
    <div class="toggle">
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="1" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">What does ‘consultant’ mean, and what do they do?</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>

        <div class="tab-content border" data-tab="1" role="region" aria-labelledby="tab-title-1581">
          <div class="p-15">
            <p>A consultant is an experienced professional with specialised knowledge in a particular field.&nbsp;</p>
            <p>Essentially, they are hired to <b>share their expertise and knowledge to help businesses reach goals and solve problems</b>. Sometimes, companies hire consultants to perform day-to-day work and augment or supplement staff, without the overhead costs associated with a full-time employee. They can also provide expert advice and guidance to clients to help them solve complex problems and make informed decisions on specific projects.&nbsp;</p>
            <p>At Positive Safety Solutions, we understand the importance of having the right consultant to help your business succeed.&nbsp;</p>
            <p>Our team of experienced professionals is here to provide expert advice and guidance in a friendly and approachable manner. With specialised knowledge in various health and safety disciplines, and experience in a wide range of industries, our consultants can help you solve complex problems and make informed decisions. Whether you need short-term or long-term assistance, we are here to help you do it better!</p>
          </div>
        </div>
      </div>
      <div class="toggle-item mb-15">
        <div class="tab-title bold border p-15" data-tab="2" role="button" aria-expanded="false">
          <a class="toggle-title" tabindex="0">What are the responsibilities of safety officers?</a>
          <div class="tab-icon">
            <span class="icon-closed">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 384.7V127.3c0-17.8 21.5-26.7 34.1-14.1l128.7 128.7c7.8 7.8 7.8 20.5 0 28.3L34.1 398.8C21.5 411.4 0 402.5 0 384.7z" />
              </svg>
            </span>
            <span class="icon-opened hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M288.7 352H31.3c-17.8 0-26.7-21.5-14.1-34.1l128.7-128.7c7.8-7.8 20.5-7.8 28.3 0l128.7 128.7c12.6 12.6 3.7 34.1-14.1 34.1z" />
              </svg>
            </span>
          </div>
        </div>
        <div class="tab-content border" data-tab="2" role="region" aria-labelledby="tab-title-1582">
          <div class="p-15">
            <p>A Health and Safety Officer/advisor/coordinator is an employee of an organisation and is usually tasked with minimising or removing the risk of accidents, work-related illnesses and injuries in the workplace. They typically maintain the safety information of the organisation and promote safety compliance by developing new, and strengthening existing health and safety policies, procedures and safe systems of work. They may also be tasked with ensuring that their organisation adheres to occupational health and safety regulations set out by the government as a minimum, and may be required to help the organisation meet, maintain or exceed industry best practice in H&amp;S matters.</p>
            <p>At Positive Safety Solutions, we recognise the significance of comprehensive training in health and safety practices, particularly in industries that require strict adherence to regulations and industry best practices. Our <a href="/nvqs/l6-nvq-diploma-in-occupational-health-and-safety-practice/">Health &amp; Safety NVQs</a> provide individuals with a profound understanding of these requirements/guidelines, enabling them to develop the knowledge and skills necessary to excel as safety professionals and make positive impacts in their workplaces.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require(TEMPLATES_PATH . "/footer.php"); ?>
<!-- include toggle script -->
<script src="<?= BASE_URL ?>/assets/js/toggle.js"></script>
</body>

</html>