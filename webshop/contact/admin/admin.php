<?php

//************  READ  ***************

require_once ("../header.php");
require_once ("../connect.php");

$stmt = $conn->prepare("SELECT * FROM contactform");

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

    $id = ($value['id']); 

    $table .= "
        <tr>
            <td>$value[name]</td>
            <td>$value[mail]</td>
            <td>$value[msg]</td>
            <td>
                <a href='../delete.php?id=$value[id]'>Ta bort</a>
            </td>
        </tr>
    ";

}

$table .= "</table>";

echo $table;

$terminate = "<div class='col-md-12'>
                    <p style = 'text-align: center;'><a href='../terminate.php'>Rensa alla poster</a></p>
                </div>";

echo $terminate;

require_once ("../footer.php");

?>



