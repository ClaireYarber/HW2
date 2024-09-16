<?php
$pageTitle= "Get result";
Include "view-header.php";
?>
<h1>Get result</h1>
<?PHP
if (isset($_GET['my-name'])) {
?>
  <p>The value sent is:</p>
<?php
  echo $_GET['my-name'];
} else { 
?>
  <p>Nothing posted to the page.</p>
<?php
}
Include "view-footer.php";
?>
