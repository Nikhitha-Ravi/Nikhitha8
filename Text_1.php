<?php
$name = filter_input(INPUT_POST,"Name");
$email=filter_input(INPUT_POST,"Email_ID",FILTER_VALIDATE_EMAIL);
$mobile=filter_input(INPUT_POST, "Mobile_Number "); 
$social=filter_input(INPUT_POST, "Social_ID");
$password=filter_input(INPUT_POST,"Password");                       

$link = mysqli_connect("127.0.0.1", "root", "", "task_1");

if (!$link) {
echo "some error occurs.";	
}

$sql= "insert into user_details values ('$name','$email','$mobile','$social','$password')";          
if ($link->query($sql) === TRUE) {
    echo "table created successfully";
} 
else 
{
    echo "please fill the details again." ;
}

 
?>