<?php
require "process.php";
 if (isset($_POST['submit'])) {
        $sql = "INSERT INTO menu (Titel,Omschrijving,Prijs, Afbeelding)
     VALUES (:Titel,:Beschrijving,:Prijs, :Afbeelding 1,LOAD_FILE('pizza-supreme-lots-pepperoni-vegetables-very-nice-golden-crust-there-artistic-blur-31294766.jpg'))";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":Titel", $_POST['Titel']);
        $stmt->bindParam(":Omschrijving", $_POST['Omschrijving']);
        $stmt->bindParam(":Prijs", $_POST['Prijs']);
     $stmt->bindParam(":Afbeelding", $_POST['Afbeelding']);
        $stmt->execute();

        header('Location: admin.php');
        exit();
    } else {
        header('Location: admin.php');
        exit();
}




