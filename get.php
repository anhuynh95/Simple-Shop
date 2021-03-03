<?php
  $id = $_POST['id'];
  $link = mysqli_connect("mysql.eecs.ku.edu", "a054h720", "gameover1", "a054h720");
  mysqli_query($link, "DELETE FROM Entries WHERE Item_ID = '$id'") or die("Failed to query".mysqli_error());
  mysqli_query($link, "DELETE FROM Owner WHERE Item_ID = '$id'") or die("Failed to query".mysqli_error());
  mysqli_close($link);
  echo "Your Item will soon be shipped to you."
?>
