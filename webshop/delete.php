<br>
<?php

include_once ("header.php");
include_once ("dbwebshop.php");

$conn->exec("USE $dbName");

//***********  DELETE  ***************

if(isset($_GET['id'])){

    $id = ($_GET['id']);

$sql = "DELETE FROM contacts WHERE contact_id = :id";
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