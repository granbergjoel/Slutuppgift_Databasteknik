<?php

//************  CREATE  *****************

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("header.php");
    require_once ("connect.php");

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);

    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {

        $stmt = $conn->prepare("INSERT INTO contactform (name, mail, msg)
                                    VALUES (:name , :mail , :msg)");
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':msg', $msg);
    
        $stmt->execute();
    
        $last_id = $conn->lastInsertId();
    
        $message = "<div class='alert alert-success' role='alert'>
                        <p>$name har sparats i databasen med id=$last_id</p>
                    </div>";  
    } 
    
    else {
        exit("<div class='alert alert-warning' role='alert'>
        <p>$mail är inte en giltig e-postadress</p></div>");
    }      
    
}

?>

<form action="#" class="row" method="post">

    <div class="col-md-6 my-2">
    <label for="name">Namn:</label>
        <input id="text" type=" text" class="form-control" name="name" required>
    </div>

    <div class="col-md-6 my-2">
    <label for="email">Email:</label>
        <input type="text" class="form-control" name="mail" required>
    </div>

    <div class="col-md-12 my-2">
    <label for="msg">Meddelande (Max 100 tecken):</label>
        <textarea class="form-control" rows="3" name="msg"></textarea>
    </div>

    <div class="col-md-4 my-2" rows="3">
        <input type="submit" value="Skicka meddelandet" class="form-control btn btn-success">
    </div>

</form>

<?php

if(isset($message)) echo $message;

require_once ("footer.php");

?>
