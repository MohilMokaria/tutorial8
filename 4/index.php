<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 8 | 4</title>
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
        <?php
            function inp($msg){
                // echo "<script>let input = prompt(\"Enter Size of Array : \");</script>";
                echo("<script type='text/javascript'> var input = prompt(\"$msg : \"); </script>");
                $ans = "<script type='text/javascript'> document.write(input); </script>";
                return $ans;
            }
        ?>
    <center>
        <h1>Bubble Sort in Array</h1>


            <?php
                $arr = [11,22,44,19,4,5,33,16,8,55];
                echo "<p>Array To sort :</p>";
                echo "<p>11 22 44 19 4 5 33 16 8 55</p>";
                echo "<br>";

                for($k=0; $k<10; $k++){
                    for($i=0, $j=1; $i<9; $i++, $j++){
                        if($arr[$i] > $arr[$j]){
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                echo "<p>After Sorted : </p>";
                for($i=0; $i<10; $i++){
                    echo " $arr[$i]";
                }

            ?>
    </center>
</body>
</html>