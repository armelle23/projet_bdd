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
        <div class="head">
            Utilisateur
        </div>
        <div class="content">
            <form method="post" action="connect.php">
                <div class="form-control">
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username" required/>
                </div>
                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" required/>
                </div>
                <div class="form-submit">
                    <button type="submit" <a href="">Valider </a> </button>
                </div>
        </div>

    </div>


</div>

</div>
</body>
<?php include "footer.php"; ?>

</html>