<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 8 | 3</title>
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
        <h1>Prime Numbers</h1>
        <form method="post">
            <label for="num">Enter Ending Range : </label>
            <input class="box" type="number" name="num" id="num">
            <br>
            <input class="but" type="button" value="Print">
        </form>
        <?php
            if($_POST){
                $n = $_POST["num"];
                
                for($i=2; $i<$n; $i++){

                    $check = 0;

                    for($j=2; $j<$i; $j++){
                        //echo "<p>$j</p>";
                        $temp = (int)($i % $j);
                        // echo "<p>num $i divided by $j = $temp</p>";
                        if($temp == 0){
                            $check++;
                        }
                    }
                    if($check == 0){
                        echo "<p>$i</p>";
                    }
                }
            }
        ?>
    </center>
</body>
</html>