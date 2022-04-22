<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style2.css" />

    <style>

        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
            height: 48px;
            width: 400px;
        }

        .topnav a {

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
        }
    </style>
    </style>
</head>
<body>
<div class="topnav">
    <a class="active" href="index.php">Home</a>
</div>
<div class="container">
    <div class="row header">
        <h1>CONTACT US &nbsp;</h1>
        <h3>Fill out the form below to learn more!</h3>
    </div>
    <div class="row body">
        <form action="#">
            <ul>
                <li>
                    <p class="left">
                        <label for="first_name">first name</label>
                        <input type="text" name="first_name" placeholder="John" />
                    </p>
                    <p class="pull-right">
                        <label for="last_name">last name</label>
                        <input type="text" name="last_name" placeholder="Smith" />
                    </p>
                </li>

                <li>
                    <p>
                        <label for="email">email <span class="req">*</span></label>
                        <input
                                type="email"
                                name="email"
                                placeholder="john.smith@gmail.com"
                        />
                    </p>
                </li>
                <li><div class="divider"></div></li>
                <li>
                    <label for="comments">comments</label>
                    <textarea cols="46" rows="3" name="comments"></textarea>
                </li>

                <li>
                    <input class="btn btn-submit" type="submit" value="Submit" />
                    <small>or press <strong>enter</strong></small>
                </li>
            </ul>
        </form>
    </div>
</div>
</body>
</html>
