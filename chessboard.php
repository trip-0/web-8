<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <style>
        .chessboard{
            width:240px;
            height:240px;
            display:grid;
            grid-template-rows:repeat(8,30px);
            grid-template-columns:repeat(8,30px);

        }
        .cell{
            width:30px;
            height:30px;
            text-align:center;
            border:solid;
        }
        .white{
            background-color:white;
        }
        .black{
            background-color:black;
 
        }

    </style>
</head>
<body>
    <h2>chessboard</h2>
    <div class="chessboard">
        <?php
        $isWhite=true;
        for($row=1;$row<=8;$row++){
        for($col=1;$col<=8;$col++){
          $cellclass=$isWhite?"white":"black";
          echo "<div class='cell $cellclass'>$row,$col</div>";
          $isWhite=!$isWhite;
        }
    
        $isWhite=!$isWhite;
    }
        ?>
</body>
</html>
