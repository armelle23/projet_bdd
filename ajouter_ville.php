<html>
  <head>
    <title>Ajouter Ville</title>
    <link href="style.css" rel="stylesheet">
  </head>
<body>

<div class="container">

<?php include "menu.php"; ?>

<form name="insertion" action="ajouter_postV.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">
          <td>Ville</td>
          <td><input type="text" name="NomV"></td>
        </tr>
        <tr align="center">
          <td>CodeP</td>
          <td><input type="text" name="CodeP"></td>
        </tr>
        <tr align="center">
          <td colspan="2"><input type="submit" value="Ajouter"></td>
        </tr>
      </table>
</form>

<a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>

</div>
<?php include "footer.php"; ?>
</body>
</html>