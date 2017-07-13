<?php



$con=mysqli_connect("127.0.0.1","root","123456","member");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}

$fullName = $_GET['fullname'];
$userName = $_GET['username'];
$passWord = $_GET['password'];
$phoneNumber = $_GET['phonenumber'];
$emailAddress = $_GET['emailaddress'];

$result = mysqli_query($con,"INSERT INTO user (fullname, username, password, phone, email)
          VALUES ('$fullName', '$userName', '$passWord', '$phoneNumber', '$emailAddress')");

if($result == true) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con); //關閉連線


// http://127.0.0.1/hello.php?fullname=Brian%20Adams&username=brian123&password=12345&phonenumber=123456789&emailaddress=brian@example.com
//測試是否成功

?>
