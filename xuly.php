<?php
  session_start();
  require_once('database/dbcon.php');

  if(!empty($_POST['first-name'])){
    $Tendau = $_POST['first-name'];
    $Tensau = $_POST['last-name'];
    $Quoctich = $_POST['your-country'];
    $Sđt = $_POST['phone-number'];
    $Gioitinh = $_POST['sex'];
    $Tuoi = $_POST['age'];
    $Tiengnhat = $_POST['japanese-level'];
    $Tienganh = $_POST['english-level'];
    $Sothich = $_POST['favorite-job'];
    $Congviec = $_POST['working-place'];

    $sql = "INSERT INTO thongtincanhan(FirstName, LastName, Country, PhoneNumber, Sex, Age, JapaneseLevel, EngLishLevel, FaroriteJob, WokingPlan) 
    VALUE ('$Tendau', '$Tensau', '$Quoctich', '$Sđt', '$Gioitinh', '$Tuoi', '$Tiengnhat', '$Tienganh', '$Sothich', '$Congviec')";
    $result = mysqli_query($conn, $sql);
    if(isset($result)){
      echo '<script>alert("Thêm thành công")</script>';
      echo '<script>window.location.href = "index.php";</script>';
    }
  }
?>

