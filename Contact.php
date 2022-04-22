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
            padding: 0.5em 2.5em 1em;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 510px;
            min-width: 324px;
            margin: 50px auto 0px;
            background-color: white;
            border: 1px solid lighten(grey, 1%);
            border-bottom: 3px solid grey;
        }
        .row {
            width: 100%;
            margin: 0 0 1em 0;
            padding: 0 2.5em;}
        .header {
            padding: 1.5em 2.5em;
            border-bottom: 1px solid grey;
            background: url(https://images2.imgbox.com/a5/2e/m3lRbCCA_o.jpg) left -80px;
            color: white;
        }

        }
        .pull-right {
            float: right;
        }
        h1 {
            include lato-book;
            display: inline-block;
            font-weight: 100;
            font-size: pxtoem(45, 16);
            border-bottom: 1px solid hsla(100%, 100%, 100%, 0.3);
            margin: 0 0 0.1em 0;
            padding: 0 0 0.4em 0;
        }
        h3 {
            include lato-reg;
            font-size: pxtoem(20, 16);
            margin: 1em 0 0.4em 0;
        }
        .btn {
            font-size: pxtoem(17, 16);
            display: inline-block;
            padding: 0.74em 1.5em;
            margin: 1.5em 0 0;
            color: white;
            border-width: 0 0 0 0;
            border-bottom: 5px solid;
            text-transform: uppercase;
            include btn(darken(grey, 10%));
            include lato-book;}
        .btn-submit {
            include btn($blue);
        }
        }

        form {
            max-width: 100%;
            display: block;}

        .ul {
            margin: 0;
            padding: 0;
            list-style: none;}
        li {
            margin: 0 0 0.25em 0;
            clear: both;
            display: inline-block;
            width: 100%;
        }
        p {
            margin: 0;
            padding: 0;
            float: left;
        }
        .divider {
            margin: 0.5em 0 0.5em 0;
            border: 0;
            height: 1px;
            width: 100%;
            display: block;
            background-color: blue;
            background-image: linear-gradient(to right, pink, blue);
        }
        .req {
            color: pink;
        }
        }
        }
        label {
            display: block;
            margin: 0 0 0.5em 0;
            color: blue;
            font-size: pxtoem(16, 16);
        }
        input {
            margin: 0 0 0.5em 0;
            border: 1px solid grey;
            padding: 6px 10px;
            color: darkgrey;

        }
        textarea {
            border: 1px solid grey;
            padding: 6px 10px;
            width: 100%;
            color: darkgrey;
        }
        small {
            color: $blue;
            margin: 0 0 0 0.5em;
        }
        }

        input {
            width: 100%;
        }
        label {
            width: 100%;
            display: inline-block;
            display: flex;
            clear: both;
        }
        li,
        p {
            width: 100%;
        }
        input.btn {
            margin: 1.5em 0 0.5em;
        }
        h1 {
            font-size: pxtoem(36, 16);
        }
        h3 {
            font-size: pxtoem(18, 16);
        }
        li small {
            display: none;
        }
        }




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
            width: 100%;
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
