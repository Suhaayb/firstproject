<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
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

        .topnav .search-container {
            display: flex;
            align-content: center;
            justify-content: center;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {

            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }
            .topnav a, .topnav input[type=text], .topnav .search-container button {
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
        </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<header>
    <nav class="main-nav">
        <label for="check" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="index.php" class="logo">Big Momma's Pizzeria</a>
        <ul class="navlinks">
            <li>
                <a href="menu.php">Menu</a>
            </li>

            <li>
                <a href="contact.php" class="Contact">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<body>
<div class="Mid">
    <div class="topnav">
     <p>Type here which pizza you would like to get more information</p>
        <div class="search-container">
            <form action="menufromdata.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <h1>The Menu</h1>
    <div class="Menu">
        <div class="Menu1">
            Neapolitan Pizza
            <img src="pics\pizzatypes-margherita-.jpg" alt="Pizza" />
        </div>
        <div class="Menu2">
            Chicago Pizza
            <img src="pics\pizzatypes-deepdish.jpg" alt="Pizza" />
        </div>
        <div class="Menu3">
            New York-Style Pizza
            <img src="pics\flat.webp" alt="Pizza" />
        </div>
        <div class="Menu4">
            Sicilian Pizza
            <img src="pics\rectangle.webp" alt="Pizza" />
        </div>
        <div class="Menu5">
            Greek
            <img src="pics\onions.webp" alt="Pizza" />
        </div>
        <div class="Menu6">
            California Pizza
            <img src="pics\pizzatypes-gourmet.jpg" alt="Pizza" />
        </div>
        <div class="Menu7">
            Detroit Pizza
            <img src="pics\blog-types-pizza_in-blog-7.jpg" alt="Pizza" />
        </div>
        <div class="Menu8">
            St. Louis Pizza
            <img src="pics\blog-types-pizza_in-blog-8.jpg" alt="Pizza" />
        </div>
        <div class="Menu9">
            Hawaiian Pizza
            <img
                src="pics\It-doesnt-get-much-better-than-Homemade-Hawaiian-Pizza.-Tropical-paradise-for-dinner-2.jpg"
                alt="Pizza"
            />
        </div>
    </div>
</div>
</div>
</body>
</html>
