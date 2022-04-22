<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'minicrud';

// Server is localhost with
$host='localhost';
$mysqli = new mysqli($host, $user,
    $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM menu ORDER BY ID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
            display: flex;
            justify-content: space-between;
        }

        .topnav a {
           display: flex;
            justify-content
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav input[type=text] {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }

        @media screen and (max-width: 600px) {
            .topnav a, .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
        body{
            display: flex;
            flex-direction:column ;
            justify-content: space-evenly;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            background-color: mediumseagreen;
            display: flex;
            align-content: space-around;
            justify-content: space-evenly;
            flex-wrap: wrap;
            height: 100%;
            width: 100%;

        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>


<div style="padding-left:16px">

</div>
<section>
    <h1>Big Momma's Pizzaria</h1>
    <!-- TABLE CONSTRUCTION-->
    <table>
        <tr>
            <th>Gerecht</th>
            <th>Omschrijving</th>
            <th>Prijs</th>
            <th>Afbeelding</th>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA
        while($rows=$result->fetch_assoc())
        {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Gerecht'];?></td>
                <td><?php echo $rows['Omschrijving'];?></td>
                <td><?php echo $rows['Prijs'];?></td>
                <td><?php echo $rows['Afbeelding'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
</body>

</html>


