<?php
$username="root";
$servername="localhost";
$password="";
$database = "demo";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn === false){
die("ERROR: Could not connect. ". mysqli_connect_error());
}
$first_name = $_REQUEST['fname'];
$middle_name = $_REQUEST['mname'];
$last_name = $_REQUEST['lname'];
$password = $_REQUEST['pass'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['num'];
$address = $_REQUEST['addr'];
$pin = $_REQUEST['pin'];
$city = $_REQUEST['city'];
$country = $_REQUEST['con'];
$skill = $_REQUEST['skill'];
$sql = "INSERT INTO formtable VALUES ('$first_name','$middle_name',
'$last_name','$password','$email','$gender','$phone','$address','$pin','$city','$country','$skill')";
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>";
echo nl2br(
    "<strong>NAME</strong> : $first_name $middle_name $last_name\n "
    ."<strong>GENDER</strong> : $gender\n"
    ."<strong>PHONE NO.</strong> : $phone\n"
    ."<strong>EMAIL</strong> : $email\n"
    ."<strong>ADDRESS</strong> : $address\n"
    ."<strong>PIN CODE</strong> : $pin\n"
    ."<strong>CITY</strong> : $city\n"
    ."<strong>COUNTRY</strong> : $country\n"
    ."<strong>SKILLS</strong> : $skill\n"
);
} else{
echo "ERROR: $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>