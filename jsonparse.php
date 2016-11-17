<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="form.php">
        <input type="submit" value="Ajouter évenement" name="Submit">
    </form>
    <?php
    include 'pdoconnect.php';
    $reponse = $pdo->query('SELECT EID, summary, startEvent, endEvent, email FROM evenement ORDER BY EID');

    while ($donnees = $reponse->fetch())
    {
        echo "$donnees[summary]</br>";
        echo "$donnees[startEvent]</br>";
        echo "$donnees[endEvent]</br>";
        echo "$donnees[email]</br></br>";
    };


     ?>
    <div id='googlejson'style="margin-top:20%;"></div>
    <script type="text/javascript">
    $(document).ready(function() {
    var url =  "https://www.googleapis.com/calendar/v3/calendars/simplon.co_7sc0sp073u3svukpopmhob9fmg%40group.calendar.google.com/events?key=AIzaSyADm7UvQFnHmkfo_sei1oZoLvx_X-_mhFI";
    $.getJSON(url, function(data) {
        for(i in data['items']) {
            item = data['items'][i];
            $("#googlejson").append( item.summary + "</br>" + item.start.dateTime  + "<br>"+ item.end.dateTime + "</br>" + item.creator.email + "<br>" + "<br>" );
        }
    });
    });

    </script>

  </body>
</html>
