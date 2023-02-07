<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 8 | 2</title>
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
        <h1>Sum of Number</h1>
        <form method="post">
            <label for="num">Number :</label>
            <input class="box" type="number" name="num" id="num" required>
            <br>
            <input class="but" type="submit" value="Add">
        </form>
        <?php
            if($_POST){
                $a = $_POST["num"];
                $sum = 0;

                while($a != 0){
                    $temp = $a%10;
                    $sum += $temp;
                    $a = (int) ($a / 10);
                    // echo "<script type='text/javascript'>alert(\"a =  $a\");</script>";
                }
                echo "<script type='text/javascript'>alert(\"Sum =  $sum\");</script>";
            }
        ?>
    </center>
</body>
</html>