<?php
  session_start();
  $email = $_SESSION['email'];
  $name = $_POST['name'];
  $des = $_POST['des'];
  $link = mysqli_connect("mysql.eecs.ku.edu", "a054h720", "gameover1", "a054h720");
  mysqli_query($link, "INSERT INTO Entries (Item_Name, Item_Desc) VALUES ('$name', '$des')") or die("Failed to query".mysqli_error());
  $newid = mysqli_query($link, "SELECT Item_ID FROM Entries WHERE Entries.Item_Name = '$name'") or die("Failed to query".mysqli_error());
  $row = mysqli_fetch_array($newid);
  $aa =  $row['Item_ID'];
  $user = mysqli_query($link, "SELECT User_ID FROM User WHERE User.Email = '$email'") or die("Failed to query".mysqli_error());
  $row2 = mysqli_fetch_array($user);
  $bb = $row2['User_ID'];
  mysqli_query($link, "INSERT INTO Owner (User_ID, Item_ID) VALUES ('$bb', '$aa')") or die("Failed to query".mysqli_error());
  Echo "<h1>Your item successfully saved to our database, now you can ship it to us. <br><h1>";
  mysqli_close($link);
 ?>
