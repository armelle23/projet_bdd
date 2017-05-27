<html>
  <head>
    <title>Ajouter Autoroute</title>
    <link href="CSS/style.css" rel="stylesheet">
  </head>
<body>
<?php include "menu.php"; ?>
<form name="insertion" action="ajouter_postA.php" method="POST">
  <table border="0" align="center" cellspacing="50" cellpadding="4">
    <tr align="center">
      <td>CodeA</td>
      <td><input type="text" name="CodeA"></td>
    </tr>
    <tr align="center">
      <td>KmT</td>
      <td><input type="text" name="KmT"></td>
    </tr>
    
 
    <tr align="center">
      <td colspan="4"><input type="submit" value="Ajouter l'autoroute"></td>

    </tr>
  </table>
</form>

  <?php include "footer.php"; ?>
</body>
</html>