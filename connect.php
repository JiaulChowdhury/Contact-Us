
<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Phone = $_POST['Phone'];
$message=$_POST['Message'];

echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $Email;
echo "<br>";
echo $Phone;
echo "<br>";
echo $message;
echo "<br>";

$link = mysqli_connect("localhost","root","","contactwith");

if($link === false){
    die("ERROR: Could not connect." . mysqil_connect_error());
}
$sql = "INSERT INTO contactme(FirstName,Lastname,Emailaddress,Phone,Yourmessage) VALUES ('$FirstName','$LastName','$Email','$Phone','$message')";
if(mysqli_query($link,$sql)){
    echo "Records added successfully.";
  } 
   else{
        echo "Error: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>