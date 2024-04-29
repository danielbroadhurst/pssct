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
    <h1 class="text-blue">News</h1>
  </div>
</section>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</div>
</body>

</html>