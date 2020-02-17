<?php include 'db.php';    


$number = $_POST['number'];
$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "insert into contact (number, name, comment)
values ('$number', '$name', '$comment')";

if ($conn->query($sql) === TRUE)
{
    include "contact.php";
    $msg = "<div class='alert alert-success'>Thank you for contacting us! We will call you back as soon as we can!</div>";
}
else 
{
    echo "ERROR: " .$sql . "<br>" . $conn->error;
    
}

$conn->close();
?>