<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial  | 5</title>
</head>
<body style="background-color: teal;">
    <center>
        <h1>Chessboard</h1>
        <?php
            for($i=0; $i<8; $i++){
                for($j=0; $j<8; $j++){
                    if(($i+$j)%2 == 0){
                        echo "<div style=\"height: 70px; width: 70px; background-color: white; display: inline-block;\"></div>";
                    }else{
                        echo "<div style=\"height: 70px; width: 70px; background-color: black; display: inline-block;\"></div>";
                    }
                }
                echo "<br>";
            }
        ?>
    </center>
</body>
</html>