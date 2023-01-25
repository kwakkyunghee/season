<?php
include("./conn.php");

$uid=$_POST['uid'];
$upass=$_POST['upass'];


//1mysql 접속

if($conn){
    echo "server connected!!";
}
else {
    echo "connection failure";
}

//2. 쿼리 
//insert
$query="insert into login values('$uid', '$upass')";
mysqli_query($conn,$query);
// 지저분해서 위에처럼 사용함 mysqli_query($conn, "insert into login values($uid, $upass)");
echo "Inserted!!";

//3.mysql 접속 종료
mysqli_close($conn);
?>
