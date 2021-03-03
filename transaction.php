<?php
  session_start();
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $_SESSION['email'] = $email;

?>
<html>
<head><h1>Please choose one of the following for your action</h1></head>
<body>
  <div id = "form">
    <p>Select one of the following below</p>
    <form action="tran2.php" method = "POST">

        <label for choice>Your choice:</label>
        <select id="choice" name ="choice">
          <option value="store">Store your items to the warehouse</option>
          <option value="get">Get your items from the warehouse</option>
          <option value="view">View your info</option>
        </select>
      <p>
        <input type="submit" value="Submit" id="Login" name="Submit" />
      </p>



  </div>

</body>
</html>
