<?php include "../database/connect_to_data_base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
    <div class="all">
        <div class="navigation">
                  <img src="./FF.png " alt="logo" width="150" height="150">
                  <div class='inup'>
                    
                    <ul>        
                      <li><a href="#" class="spe">déconnexion</a></li>
                    </ul>
                  </div>
                  <div class="cl"></div>
                </div>
        <div class="con">

            <div>
              <!--  <?php
                $se="SELECT * FROM user";
                $resu=mysqli_query($connect,$se);
                while($row = mysqli_fetch_assoc($resu)) {
                    echo $row["email"];
                }
            ?>-->
            </div>
        </div>
    </div>
</body>
</html>