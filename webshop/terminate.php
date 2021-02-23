<br>
<?php 

include_once ("header.php");
include_once ("dbwebshop.php");

$conn->exec("USE $dbName");

//***********  DELETE ALL  ***************

$sql = "DELETE FROM contacts; ALTER TABLE contacts AUTO_INCREMENT = 1";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':contacts', $contacts);
$stmt->execute();

$message = "<div class='alert alert-danger' role='alert'>
                <p>Alla poster har raderats!</p>
            </div>"; 
echo $message;

require_once ("footer.php");

?> 