<?php

$action = $_POST['action'];

if($action == 'create'){
    // Variabelen vullen
    $titel = $_POST['title'];
    $beschrijving = $_POST['description'];
    $afdeling = $_POST['department'];
    $deadline = $_POST['deadline'];

    require_once '../backend/conn.php';

    // 2. Query voorbereiden
    $query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user, created_at) VALUES (:titel, :beschrijving, :afdeling, :melder, :status, :deadline, :user, :created_at)";

    // 3. Query voorbereiden
    $statement = $conn->prepare($query);

    // 4. Query uitvoeren
    $statement->execute([
        ":titel"    => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling"   => $afdeling,
        ":status"       => $status,
        ":deadline"   => $deadline,
        ":user" => $user,
        ":created_at" => $created_at,
    ]);

    // Bericht instellen
    $msg = "taak succesvol toegevoegd.";

    // Terugkeren naar de vorige pagina met een bericht
    header("Location: index.php?msg=$msg");
    exit;
    


}

if($action == 'update'){
    $id = $_POST['id'];

    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $afdeling = $_POST['afdeling'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline']; 
    $user = $_POST['user'];
    $created_at = $_POST['created_at'];

   


    require_once '../backend/conn.php';


    $query = "UPDATE taken 
             SET titel = :titel, beschrijving = :beschrijving, afdeling = :afdeling, status = :status, deadline = :deadline, user = :user
             WHERE id = :id";


    $statement = $conn->prepare ($query);
    $statement->execute([
        ":id"              => $id,
        ":titel"    => $titel,
        ":beschrijving"         => $beschrijving,
        ":afdeling"   => $afdeling,
        ":status"       => $status,
        ":deadline"   => $deadline,
        ":user" => $user,
    ]);



    
    

}


if($action == 'delete'){
    $id = $_POST['id'];


    require_once '../backend/conn.php';


    $query = "DELETE FROM  taken
             
             WHERE id = :id";


    $statement = $conn->prepare ($query);
    $statement->execute([
     ":id"              => $id,
    ]);


    $msg = "taak succesvol verwijderd";

    header("Location: index.php?msg=$msg");
    exit;


    
    

}


?>




