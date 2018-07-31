<?php
session_cache_limiter('');
session_start();

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

$user_email = $_POST['user_email'];
$user_pwd = $_POST['user_pwd'];

$stmt = " SELECT * FROM user_info WHERE user_email= '$user_email' AND user_pwd = '$user_pwd'";

$result = mysqli_query($conn, $stmt);
$row = mysqli_fetch_array($result);

if ($row != null) {
           $_SESSION['user_name'] = $row['user_name'];
           $_SESSION['user_email'] = $row['user_email'];
           $_SESSION['user_company'] = $row['user_company'];
           $_SESSION['user_department'] = $row['user_department'];
           $_SESSION['user_position'] = $row['user_position'];
           $_SESSION['user_phone'] = $row['user_phone'];
           $_SESSION['user_profile_image'] = $row['user_profile_image'];
           echo $_SESSION['user_email'] .'로그인 성공';
       } else{ echo '로그인 실패: ' .mysqli_error($conn);}


//Jason변환 시작
$data = array();

if($result){
  while($row=mysqli_fetch_array($result)){
    array_push($data,array(
                'user_name'=>$row['user_name'],
                'user_email'=>$row['user_email'],
                'user_company'=>$row['user_company'],
                'user_department'=>$row['user_department'],
                'user_position'=>$row['user_position'],
                'user_phone'=>$row['user_phone'],
                'user_login_api_type'=>$row['user_login_api_type'],
                'user_profile_image'=>$row['user_profile_image']
               ));
   }

  header('Content-Type: application/json; charset=utf8');
  $json = json_encode(array("user_info"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
  echo $json;}
  else{
    echo "SQL문 처리중 에러 발생 : ";
    echo mysqli_error($conn);
}

//mysqli_close($conn);
?>
