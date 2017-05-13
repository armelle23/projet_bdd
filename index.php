<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Autoroutes</title>
    <link href="assets/lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="menu_deroulant.css" rel="stylesheet">
    <link href="bibou.css" rel="stylesheet">

</head>
<body>
<div id ="con">
        
        <div id ="depart">
                
                 <label > Ville de départ   : </label>
                <select  id="hour-selector" title="hour">
                    <option value="Paris">Paris</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Rennes">Renes</option>
                    <option value="Nancy">Nancy</option>
               
                </select>


                <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>

        </div>

         <div id ="depart">
                
                 <label for="pickup"> Ville d'arrivée  : </label>
                <select name="pickup" id="hour-selector" title="hour">
                    <option value="Paris">Paris</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Rennes">Renes</option>
                    <option value="Nancy">Nancy</option>
               
                </select>

                
                <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>



        </div>

    </div>

        
  <form method="post" action="path.php">
      <button type="submit" <a href="path.php">Valider </a> </button>
      </form>
   
</body>
</html>

