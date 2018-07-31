<?php
$host = 'localhost';
$user = 'root';
$pwd = 'ddong369';
$dbName = 'Asome';
$conn = mysqli_connect($host, $user, $pwd, $dbName);
  if (!$conn)
  {
      echo "MySQL 접속 에러 : ";
      echo mysqli_connect_error();
      exit();
  }

  $stmt1 = " INSERT INTO proj_info(
              proj_name, proj_about)
            VALUES (
                '".$_POST['proj_name']."','".$_POST['proj_about']."')";
  $result1 = mysqli_query($conn, $stmt1);

  $stmt2 = " INSERT INTO status_user(
              proj_name, user_name, status_user_role, status_user,
              status_user_start, status_user_midend,
              status_user_end)
            VALUES (
                '".$_POST['proj_name']."','".$_POST['user_name']."','" .$_POST['status_user_role']."','".$_POST['status_user']. "','".$_POST['status_user_start']. "','".$_POST['status_user_midend']. "','".$_POST['status_user_end']. "')";
  $result2 = mysqli_query($conn, $stmt2);


  if($result1 === false){
     echo 'projec_info 오류: 'mysqli_error($conn);
  }
  if($result2 === false){
     echo 'status_user 오류: 'mysqli_error($conn);
  }

  //mysqli_close($conn);
?>
