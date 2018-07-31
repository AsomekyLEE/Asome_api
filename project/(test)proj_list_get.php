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



$user_email = $_POST['user_email'];
$user_pwd = $_POST['user_pwd'];



$stmt = " SELECT * FROM proj_info
          WHERE proj_name = (SELECT pro_name
                             FROM status_user
                             WHERE user_name = '$_SESSION['user_name']')";

$result = mysqli_query($conn, $stmt);
$row = mysqli_fetch_array($result);


//Jason변환 시작
$data = array();

if($result){
  while($row=mysqli_fetch_array($result)){
    array_push($data,array(
                'proj_name'=>$row['proj_name'],
                'proj_about'=>$row['proj_about'],
                'proj_status'=>$row['proj_status'],
                'proj_error'=>$row['proj_error'],
               ));
   }

  header('Content-Type: application/json; charset=utf8');
  $json = json_encode(array("proj_list"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
  echo $json;}
  else{
    echo "SQL문 처리중 에러 발생 : ";
    echo mysqli_error($conn);
}

//mysqli_close($conn);
?>
