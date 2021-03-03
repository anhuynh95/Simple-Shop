<?php
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  if(empty($email) || empty($password))  {
    echo "Empty input!!!";
  }
  else{
    $link = mysqli_connect("mysql.eecs.ku.edu", "a054h720", "gameover1", "a054h720");
    //mysqli_select_db($link, "User");

    $result = mysqli_query($link, "SELECT Email, Password FROM User where Email = '$email' and Password = '$password'") or die("Failed to query".mysqli_error());
    $row = mysqli_fetch_array($result);
    if(isset($_POST['Login'])){
      if(empty($row)){
        header("Location: index.php");
      }
      else{
        if($row['Email'] == $email && $row['Password'] == $password)  {
          //echo "Login success ".$row['Email'];
          header("Location: transaction.php");
        }
        else {
          echo  "Failed";
        }
      }
    }

    if(isset($_POST['Sign'])){
      if(empty($row)){
        $val = "INSERT INTO User (Email, Password) VALUES ('$email', '$password')";
        if(mysqli_query($link, $val)){
          //echo "Sign up successfully!";
          header("Location: transaction.php");
        }
        else{
          //echo "Sign up failed";
          header("Location: index.php");
        }
      }
      else{
        //Echo "User is already in the system";
        header("Location: index.php");
      }

    }


    mysqli_close($link);
  }


?>
