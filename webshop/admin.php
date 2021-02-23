<?php require_once ("header.php"); require_once ("dbwebshop.php");?>

<br>
<?php

$conn->exec("USE $dbName");

$stmt = $conn->prepare("SELECT * FROM contacts");

$stmt->execute();

$table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>E-mail</th>
        <th>Meddelande</th>
        <th>Admin</th>
    </tr>
    ";

$result = $stmt->fetchAll();

 foreach($result as $key => $value){

    $id = ($value['contact_id']); 

    $table .= "
        <tr>
            <td>$value[customer]</td>
            <td>$value[email]</td>
            <td>$value[messages]</td>
            <td>
                <a href='delete.php?id=$value[contact_id]'>Ta bort</a>
            </td>
        </tr>
    ";

}

$table .= "</table>";

echo $table;

$terminate = "<div class='col-md-12'>
                    <p style = 'text-align: center;'><a href='terminate.php'>Rensa alla poster</a></p>
                </div>";

echo $terminate;

?>

<hr>
<?php require_once ("footer.php");?>





