<!-- <!DOCTYPE html>
<html>
<head>
   <link href="login.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
</head>
<body>

<div id ="con">
<?php //include "menu.php"; ?>
    <a href="login_admin.php"> <input type="button" value="Connection administrateur  "> </a>
    <a href="login_user.php" > <input type="button" value="Connection utilisateur"> </a>    
</div>
    <?php // include "footer.php"; ?>   
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
   <link href="login.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">

    <title></title>
     
</head>
<body>

<div id="container">
    <div id="login">
        <div class="head"> Choix </div>
        <div class="content">
                <div class="form-control">
                    <a href="login_admin.php"> <input type="button" value="Connection administrateur  "> </a>
                </div>
                <div class="form-control">
                    <a href="login_user.php" > <input type="button" value="Connection utilisateur"> </a>
                </div>
        </div>
    </div>
</div>

</div>
</body>
<?php include "footer.php"; ?>

</html>