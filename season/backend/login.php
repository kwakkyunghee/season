<?php
include("./conn.php");

$uid=$_POST['uid'];
$upass=$_POST['upass'];

$sql = "select id, password from season_member where id='$uid' && password='$upass';";
$sel = mysqli_query($conn, $sql);
$n = mysqli_num_rows($sel);

if($uid==null) echo "<script>alert('아이디를 입력해주세요'); history.go(-1);</script>";
else if($upass==null) echo "<script>alert('비밀번호를 입력해주세요'); history.go(-1);</script>";
if(!$n) echo "<script>alert('일치하는 아이디가 없습니다.')</script>";
else{
    $array=mysqli_fetch_row($sel);
    $pwd= $array['upass'];
    if($upass == 0){
        echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1);</script>";
    }
    else{
        setcookie("uid", $uid, time()+3600*24);
        setcookie("upass", $upass, time()+3600*24);
        echo "<script>alert('환영합니다');history.go(-1);</script>";
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";//메인화면으로 이동
    }
}


//3.mysql 접속 종료
mysqli_close($conn);
?>
