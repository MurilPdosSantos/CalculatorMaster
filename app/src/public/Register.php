<?php
    ob_clean();
?>
<html lang="en-us">

<head>
    <title>Calculator - Login</title>
    <meta charset="utf-8">
    <style>
        
        body {
            margin: 0;
            padding: 0;
            font-family: Fira Code;
            background-color: #34495e;
        }

        .box {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #191919;
            text-align: center;
            border-radius: 10px;
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        .box input[type="text"],.box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box input[type="text"]:focus,.box input[type="password"]:focus {
            width: 280px;
            background-color: #2ecc71;
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }

        .box input[type="submit"]:hover {
            background: #2ecc71;
        }

    </style>
</head>

<body>
    <header>
        <form class="box" method="post">
            <h1>Login</h1>
		    <input type="text" name="Username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" action="localhost/project/calculator/src/public/pages/index.html" name="send" value="Login">
            <?php
                if(isset($_POST["send"])){
                    $name = $_POST["Username"];
                    $pass = $_POST["password"];
            
                    if($name =="" || $pass ==""){
                        die("O codigo morreu pois se registro é invalido!!!");
                    }else{
                        include("pages/Calculator.php");
                    }
                }
            ?>
        </form>
    </header>
</body>

</html>

