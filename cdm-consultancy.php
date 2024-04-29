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

<div class="container">
  <h1>Starter Page</h1>
  <p>This is a starter page. You can use this as a template for new pages.</p>
</div>

<?php require(TEMPLATES_PATH . "/footer.php"); ?>
</div>
</body>

</html>