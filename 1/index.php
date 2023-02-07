<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 8 | 1</title>
    <style>
        label{
            font-size: 2rem;
            margin: 40px;
        }
        .box{
            padding: 10px;
            margin: 40px;
        }
        .but{
            font-size: 1rem;
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Fibonacci</h1>
        <form method="post">
            <label for="num">Number :</label>
            <input class="box" type="number" name="num" id="num" required>
            <br>
            <input class="but" type="submit" value="Print">
        </form>
        <?php
            if($_POST){
                $a = 0;
                $b = 1;
                $i = 0;
                $n = $_POST["num"];
                echo "<p>$a</p>";
                echo "<p>$b</p>";
                do{
                    $c= $a + $b;
                    echo "<p>$c</p>";
                    $i++;
                    $a = $b;
                    $b = $c;
                }while($i<($n-2));
            }
        ?>
    </center>
</body>
</html>