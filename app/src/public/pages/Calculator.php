<?php
    if(isset($_POST["send"])){
        $name = $_POST["Username"];
        $pass = $_POST["password"];

        if($name =="" || $pass ==""){
            die("O codigo morreu pois se registro é invalido!!!");
        }else{
          ob_clean();
        }
    }
?>

<html lang="en-us">

<head>
    <script type="text/javascript">
        function insert(num){
            document.form.textview.value = document.form.textview.value+num
        }
    </script>
    <title>Calculator - Inicio</title>
    <script type="text/javascript">
        function back(){
            var exp = document.form.textview.value;
            document.form.textview.value = exp.substring(0,exp.length-1);
        }
    </script>
    <meta charset="utf-8">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }

        .button{
            width: 50;
            height: 50;
            font-size: 25;
            margin: 2; 
            background: linear-gradient(to left,#08afff,#0000ff);
            border: 5;
            color: white;
            cursor: pointer;
            border-radius: 25px;
            border-color: lightblue; 
        }
    </style>
    <script type="text/javascript">
        function equal(){
            var exp = document.form.textview.value;
            if(exp){
                document.form.textview.value = eval(exp);
            }
        }
    </script>
    <style type="text/css">
        .textview{
            width: 217;
            margin: 5;
            font-size: 25;
            color: #607d8b;
            border: 5;
            padding: 5; 
            border-radius: 25px;
        }

        .box{
            font-family: fira code;
            align-items: center;
            text-align: center;
            position: absolute;
            width: 240px;
            height: 425px;
            top: 50%;
            left: 50%;
            transform: translateX(-50%)translateY(-50%);
            background: linear-gradient(to left,#08afff,#0000ff);
            border-radius: 5px; 
        }

        .bg{
            background: linear-gradient(to right,#e91e63,#3f51b5);
            height: 100%;
        }
    </style>
    <script type="text/javascript">
        function clean(){
            document.form.textview.value = "";
        }
    </script>
</head>

<body>
    <header>
        <div class="bg"></div>
        <div class="box">
            <form name="form" method="GET">
                <h1>Calculator</h1>
                <input class="textview" type="text" placeholder="Calculations..." name="textview"><br>
                <table>
                    <tr>
                        <td><input class="button" value="C" type="button" onclick="clean()" name="bot-clear"></td>
                        <td><input class="button" value="<" type="button" onclick="back()" name="bot-rd"></td>
                        <td><input class="button" value="/" type="button" onclick="insert('/')" name="bot-sd"></td>
                        <td><input class="button" value="+" type="button" onclick="insert('+')" name="bot-add"></td>
                    </tr>
                    <tr>
                        <td><input class="button" value="7" type="button" onclick="insert(7)" name="bot-7"></td>
                        <td><input class="button" value="8" type="button" onclick="insert(8)" name="bot-8"></td>
                        <td><input class="button" value="9" type="button" onclick="insert(9)" name="bot-9"></td>
                        <td><input class="button" value="*" type="button" onclick="insert('*')" name="bot-x"></td>
                    </tr>
                    <tr>
                        <td><input class="button" value="4" type="button" onclick="insert(4)" name="bot-4"></td>
                        <td><input class="button" value="5" type="button" onclick="insert(5)" name="bot-5"></td>
                        <td><input class="button" value="6" type="button" onclick="insert(6)" name="bot-6"></td>
                        <td><input class="button" value="-" type="button" onclick="insert('-')" name="bot-sub"></td>
                    </tr>
                    <tr>
                        <td><input class="button" value="1" type="button" onclick="insert(1)" name="bot-1"></td>
                        <td><input class="button" value="2" type="button" onclick="insert(2)" name="bot-2"></td>
                        <td><input class="button" value="3" type="button" onclick="insert(3)" name="bot-3"></td>
                        <td rowspan="5"><input style="height: 106;" class="button" value="=" type="button" onclick="equal()" name="bot-equal"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input style="width: 110;" class="button" value="0" type="button" onclick="insert(0)" name="bot-1"></td>
                        <td><input class="button" value="." type="button" onclick="insert('.')" name="bot-2"></td>
                    </tr>
                </table>
                <p>Use wisely<p>
                <?php
                    echo $name;
                ?>
            </form>
        </div>
    </header>
</body>

</html>