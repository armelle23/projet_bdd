<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="description" content="">
        
            <title>Connexion</title>
            <link href="style.css" rel="stylesheet">
         <link href="bibou.css" rel="stylesheet">
        </head>
 
<body>
<?php include "menu_2.php"; ?>
<div class="container">
     <form method="post" action="connect.php">
        <!-- <div class="connect nonwrite">
            <label for="mail"> Identifiant *</label>
            <input type="Mail Address" placeholder="mail" id="mail" name="mail" required>
            <br><br>

            <label for="password"> Mod de passe * </label>
            <input type="Password" placeholder="password" id="password" name="password" required>
            <br><br>

            <button type="submit" <a>Valider </a> </button>
            <a href="login_user.php" > <input type="button" value="Deconnexion"> </a> -->
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
    </form>
</div>
<?php include "footer.php"; ?>
</body>
</html>        