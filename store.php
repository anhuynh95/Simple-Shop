<?php
  session_start();
  $email = $_SESSION['email'];
  $_SESSION['email'] = $email;

?>
<html>
<head><h1>Please fill in the item information and ship it to us after</h1></head>
<body>
  <div id = "form">
    <form action="store2.php" method = "POST">
      <p>
        <label>Item_Name</label>
        <input type="text" value="" id="name" name="name" />
      </p>
      <p>
        <label>Item_Desc</label>
        <input type="text" value="" id="des" name="des" />
      </p>

      <p>
        <input type="submit" value="Submit" id="Login" name="Submit" />
      </p>



  </div>

</body>
</html>
