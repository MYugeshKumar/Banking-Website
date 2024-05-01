<? php
$server_name="localhost";
$user_name="root";
$pwd="";
$dbname="Ghost Bank";
$conn=mysqli_connect($server_name,$user_name,$pwd,$dbname);
if(!$conn){
    die("Not able to connect to the database because of the error:".mysqli_connect_error());
}
?>