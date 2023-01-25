<?php
include("conn.php");
$uid=$_POST['uid'];
$upass=$_POST['upass'];
$umail=$_POST['umail'];
$uname=$_POST['uname'];

$sql="select id from season_member;";
$sel = mysqli_query($conn, $sql);
$n=mysqli_num_rows($sel);

if($uid==null) echo "<script>alert('아이디를 입력하세요.'); history.go(-1);</script>";
else for($i=0; $i<$n; $i++){
    $re=mysqli_fetch_row($sel); 
    if((string)$re[0]==$uid){
        echo "<script>aert('이미 사용중인 아이디 입니다.'); history.go(-1);</script>";break;
    }
}
if($upass==null) echo "<script>alert('비밀번호를 입력해주세요.');history.go(-1);</script>";
else if($uname==null) echo "<script>alert('이름을 입력해주세요.');history.go(-1);</script>";
else if($umail==null) echo "<script>alert('메일을 입력해주세요.');history.go(-1);</script>";
//이메일도 필수항목으로 해야하나?

else{
    $sql="insert into season_member(id, password, name, email) value('$uid', '$upass', '$uname','$umail');";
    mysqli_query($conn, $sql);
    echo "<script>alert('회원가입되었습니다.'); history.go(-1);</script>";
}


mysqli_close($conn);
?>