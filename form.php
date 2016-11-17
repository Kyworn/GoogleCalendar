<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>
    <h4>Ajouter vôtre évenement</h4>
    <form style="margin-top:20%;" action="add.php" method="post">
      <p>Intitulé de vôtre évenement</p>
      <input type="text" name="summary">
      <p>Date de début de l'évenenement</p>
      <input type="text" name="startEvent">
      <p>Date de fin de l'évenement</p>
      <input type="text" name="endEvent">
      <p>Email du créateur de l'évenement</p>
      <input type="text" name="email">
      <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="Envoyé" name="submit"/>

    </form>
  </body>
</html>
