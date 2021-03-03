<?php
  session_start();
  $email = $_SESSION['email'];
  $_SESSION['email'] = $email;
?>
<?php
$choice = $_POST['choice'];
if($choice == "store"){
  header("Location: store.php");
}
elseif($choice == "view"){
  header("Location: view.php");
}
elseif($choice == "get")  {
  header("Location: get2.php");
}
?>
