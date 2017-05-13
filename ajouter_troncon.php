<html>
  <head>
    <title>Ajouter Ville</title>
  </head>
<body>
<form name="insertion" action="ajouter_postT.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">

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
</body>
</html>