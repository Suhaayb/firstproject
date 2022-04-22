<?php
require "process.php";
 if (isset( $_POST['update'])) {
    $sql = "UPDATE menu SET Gerecht = :Gerecht, Omschrijving = :Omschrijving, Prijs = :Prijs, Afbeelding = :Afbeelding
     WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->bindParam(":Gerecht", $_POST['Gerecht']);
    $stmt->bindParam(":Omschrijving", $_POST['Omschrijving']);
    $stmt->bindParam(":Prijs", $_POST['Prijs']);
     $stmt->bindParam(":Afbeelding", $_POST['Afbeelding']);
    $stmt->execute();

    header('Location: order.php');
 }
 else if (isset($_POST['delete'])) {
    $sql = "DELETE FROM menu 
     WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->execute();

    header('Location: order.php');
    exit();
} else {
    header('Location: order.php');
    exit();
}
