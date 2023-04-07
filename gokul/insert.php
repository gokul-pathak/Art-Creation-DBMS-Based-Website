<?php
$name=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$details=$_POST['detail'];

//Establishing connection with server
$conn=new mysqli('localhost','root', '','artrik_room');

//check for connection error
if($conn->connect_error){
    die("Error in db connection:".$conn->connect_errno.":".$conn->connect_error);
}
//insert value
$insert="insert into
suggestion(id, name, phone, email, subject, details)
values('','$name','$phone','$email','$subject','$details')";
if($conn->query($insert)){
    echo'Thank you! We will get in touch with you soon';
}
else{
    echo'error'.$conn->error;
}

//close connection
mysqli_close($conn);
?>