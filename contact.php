<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $company = $_POST['company'];
  $message = $_POST['message'];
  if (empty($name)) {
    echo "Name is empty";
  } 
  if (empty($company)) {
    echo "Company is empty";
  }
  if (empty($message)) {
    echo "Message is empty";
  } 
  mail ("s.angelov1912@gmail.com", "Quote", $message);
  header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}
?>