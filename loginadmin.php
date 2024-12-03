<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $login = mysqli_query(
      $koneksi, "select * from user where username='$username' and password='$password' "
  );
  if ($data = mysqli_fecth_array($login)) {
      //berhasil login
      $_SESSION['username'] = $data['usename'];
      $_SESSION['password'] = $data['password'];
      header('location: dashboard.php');
  } else {
     //gagal login
     header('login.php');
  }
  if (mysqli_num_rows($login) > 0) {
      header("location: index.php");
  }
}

?>

<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="widt=device=widt, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" medtod="post">
        <table>
            <tr>
                <td> Username </td>
                <td> <input type="text" name="username" id= ""></td>
            </tr>
            <tr>
                <td> Password </td>
                <td> <input type="password" name="password"></td>
            </tr>
            <tr>
                <input type="submit" name="login" value="login">
            </tr>
        </table> 
<body>

</html>