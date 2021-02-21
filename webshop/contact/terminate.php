<?php 

include_once ("header.php");
include_once ("connect.php");

//***********  DELETE ALL  ***************

$sql = "DELETE FROM contactform; ALTER TABLE contactform AUTO_INCREMENT = 1";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':contacts', $contacts);
$stmt->execute();

$message = "<div class='alert alert-danger' role='alert'>
                <p>Alla poster har raderats!</p>
            </div>"; 
echo $message;

require_once ("footer.php");

?> 