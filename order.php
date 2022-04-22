<?php
require_once ("process.php");

$sql = "SELECT * FROM menu";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php foreach($result as $menu){
?>

<form action="update&delete.php" method="post">
    <div>
        <label>ID</label>
        <input readonly name="ID" value="<?php echo $menu['ID']; ?>" />
    </div>
    <div>
        <label>titel</label>
        <input type="text" name="Gerecht" value="<?php echo $menu['Gerecht']; ?>" />
    </div>
    <div>
        <label>prijs</label>
        <input type="text" name="Omschrijving" value="<?php echo $menu['Omschrijving']; ?>" />
    </div>
    <div>
        <label>beschrijving</label>
        <input type="number" name="Prijs" value="<?php echo $menu['Prijs']; ?>" />
    </div>
    <div>
    <input type="submit" name="update" value="update"><input type="submit" name="delete" value="delete">
</form>
<?php
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="addProduct.php" target="_self">
    <input type="text" name="Gerecht" placeholder="Gerecht" required/>
    <input type="text" name="Omschrijving" placeholder="Omschrijving" required/>
    <input type="number" name="Prijs" placeholder="Prijs" required/>
    <input type="text" name="Afbeelding" placeholder="Afbeelding" required/>
    <input type="submit" value="submit" name="submit">



</form>


</body>
</html>