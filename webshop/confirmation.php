<br>

<?php
include_once ("header.php");
require_once ("dbwebshop.php");

$conn->exec("USE $dbName");

$id=$_GET['id'];

$stmt = $conn->prepare("SELECT * FROM orders WHERE order_id=$id;");
$stmt->execute();

$result = $stmt->fetchAll();

$customer_id = $result[0]['customer_id'];
$stmt = $conn->prepare("SELECT * FROM customers WHERE customer_id=$customer_id;");
$stmt->execute();
$result = $stmt->fetchAll();

foreach($result as $key =>$value){
$message = "<div class='alert alert-success' role='success'>
            <p>Hej $value[customer]!</p>
            <p>En order har skapats med Order-id: $id!</p>
            </div>";
        }
 echo $message;

include_once ("footer.php");

