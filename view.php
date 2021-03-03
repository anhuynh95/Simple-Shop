<?php
  session_start();
  $email = $_SESSION['email'];
  $link = mysqli_connect("mysql.eecs.ku.edu", "a054h720", "gameover1", "a054h720");
  $result = mysqli_query($link, "SELECT User.User_ID, User.Email, Entries.Item_Name, Entries.Item_Desc FROM User JOIN Owner JOIN Entries WHERE  User.Email = '$email' and User.User_ID = Owner.User_ID and Owner.Item_ID = Entries.Item_ID") or die("Failed to query".mysqli_error());
  while($row = mysqli_fetch_array($result)){
    echo  "Here is your own info: <br>";
    echo $row['User_ID']."<br>";
    echo $row['Email']."<br>";
    echo "Here is the item we stored for you: <br>";
    echo $row['Item_Name']."<br>";
    echo $row['Item_Desc']."<br><br>";
  }
  mysqli_close($link);
 ?>
