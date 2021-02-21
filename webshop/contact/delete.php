<?php

include_once ("header.php");
include_once ("connect.php");

//***********  DELETE  ***************

if(isset($_GET['id'])){

    $id = ($_GET['id']);

$sql = "DELETE FROM contactform WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$rowCount = $stmt->rowCount();

$message = "<div class='alert alert-warning' role='alert'>
                <p>$rowCount rad har raderats!</p>
            </div>";  

if(isset($message)) echo $message;

}

require_once ("footer.php");

?>