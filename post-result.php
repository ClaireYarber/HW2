<?php
$pageTitle= "Post result";
Include "view-header.php";
?>
<h1>Post result</h1>
<?PHP
echo getDisplay();
include "view-footer.php";

function getDisplay() {
  if (isset($_POST['my-name'])) {
    return "<p>The value sent is:</p>" . $_POST['my-name'];
} else { 
    return "<p>The value sent is:</p>";
}
}
?>
