<html>
  <head>
    <title>Ajouterun tronçon </title>
     <link href="style.css" rel="stylesheet">
  </head>
<body>
<?php include "menu.php"; ?>
<div class="container">
<form name="insertion" action="ajouter_postT.php" method="POST">
  <table border="0" align="center" cellspacing="10" cellpadding="6">

   <tr align="center">
      <td>Code tronçon </td>
      <td><input type="text" name="CodT"></td>
    </tr>
    <tr align="center">
      <td>Code Autoroute</td>
      <td><input type="text" name="CodA"></td>
    </tr>
    <tr align="center">
      <td>Kilometre initial </td>
      <td><input type="text" name="DuKm"></td>
    </tr>
     <tr align="center">
      <td>Kilometre final</td>
      <td><input type="text" name="AuKm"></td>
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