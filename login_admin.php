<!DOCTYPE html>
<html>
<head>
   <link href="CSS/login.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">

    <title></title>
</head>
<body>


<div id="content">

    <div id="login">

        <div class="head">
            Administrateur
        </div>

        <div class="content">
            <form action="panel_admin.php">


                <div class="form-control">
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username"/>
                </div>

                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" />
                </div>

                <div class="form-submit">
                    <button type="submit" <a href="">Valider </a> </button>
                </div>
        </div>

    </div>


</div>
<?php include "footer.php"; ?>
</body>

</html>