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

 $user_name = $_POST['user_name'];
 $user_email = $_POST['user_email'];
 $user_pwd = $_POST['user_pwd'];
 $user_company = $_POST['user_company'];
 $user_department = $_POST['user_department'];
 $user_position = $_POST['$user_position'];
 $user_phone = $_POST['$user_phone'];
 $user_profile_image = $_POST['$user_profile_image'];   //skip

  $result = mysqli_query($conn, $stmt);
}
$stmt = " INSERT INTO user_info(
              user_name, user_email, user_pwd, user_company,
              user_department, user_position, user_phone,
              user_profile_image)
           VALUES (
              '".$_POST['user_name']."',
              '".$_POST['user_email']."',
              '".$_POST['user_pwd']."',
              '".$_POST['user_company']."',
              '".$_POST['user_department']."',
              '".$_POST['user_position']."',
              '".$_POST['user_phone']."',  '".$_POST['user_profile_image']."')";
 $result = mysqli_query($conn, $stmt);


 if($result === false){
   echo '회원가입 실패: '.mysqli_error($conn);
 }else{
   echo '회원가입 성공';
 }
 //mysqli_close($conn);
?>
