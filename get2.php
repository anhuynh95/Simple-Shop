<?php
  session_start();
  $email = $_SESSION['email'];
  $_SESSION['email'] = $email;
 ?>

<?php

$link = mysqli_connect("mysql.eecs.ku.edu", "a054h720", "gameover1", "a054h720");
$result = mysqli_query($link, "SELECT Entries.Item_ID, Entries.Item_Name, Entries.Item_Desc  FROM User JOIN Owner JOIN Entries WHERE  User.Email = '$email' and User.User_ID = Owner.User_ID and Owner.Item_ID = Entries.Item_ID") or die("Failed to query".mysqli_error());

echo "Here is your available item in the warehouse in the form of Item_ID Item_Name Item_Desc: <br>";
while($row = mysqli_fetch_array($result)){
  echo $row['Item_ID']."<br>";

  echo $row['Item_Name']."<br>";

  echo $row['Item_Desc']."<br><br>";
}
mysqli_close($link);
 ?>

<html>
<head><h1>Item_ID is in the information above</h1></head>
<body>
  <div id = "form">
    <p>Please input the Item_ID you want to take out</p>
    <form action="get.php" method = "POST">
    <input type = "number" name="id" value = "">
    <input type="submit" value="Submit" id="Login" name="Submit" />
  </div>
</body>
</html>
