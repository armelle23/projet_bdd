<!DOCTYPE html>
<html>
<head>
   <link href="css/login.css" rel="stylesheet">

    <title></title>
</head>
<body>
<div id="container">

    <div id="login">

        <div class="head">
            Administrateur
        </div>

        <div class="content">
            <form method="post" action="BDD_project.php">


                <div class="form-control">
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username"/>
                </div>

                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" />
                </div>

                <div class="form-submit">
                    <button type="submit" <a href="BDD_project.php">Valider </a> </button>
                </div>
        </div>

    </div>
<div id="container">

    <div id="login">

        <div class="head">
            Utilisateur
        </div>

        <div class="content">
            <form method="post" action="index.html">


                <div class="form-control">
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username"/>
                </div>

                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" />
                </div>

                <div class="form-submit">
                    <button type="submit" <a href="accueil.html">Valider </a> </button>
                </div>
        </div>

    </div>


</div>

</div>
</body>
</html>