<?php
$pageTitle= "Post result";
Include "view-header.php";
?>
<h1>Post result</h1>
<?PHP
if (isset($_POST['my-name'])) {
?>
  <p>The value sent is:</p>
<?php
  echo $_POST['my-name'];
} else { 
?>
  <p>Nothing posted to the page.</p>
<?php
}
Include "view-footer.php";
?>
