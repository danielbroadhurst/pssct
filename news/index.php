<?php
define('SAFETORUN', TRUE);
$mytitle = 'News - Positive Safety Solutions';
$myMetaDescription = 'News Two Minute Reads';
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
require(TEMPLATES_PATH . "/header.php");
// Body
// Header & Menu
?>

<section class="container title mt-30">
  <div class="flex-container justify-center text-center">
    <h1 class="text-blue">News</h1>
  </div>
</section>

<!-- All blog posts contain Lorem Ipsum text -->

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</body>

</html>