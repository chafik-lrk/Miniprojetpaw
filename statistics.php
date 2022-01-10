<?php
    include 'config.php';
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    $cptFoot = 0;
    $cptBasket = 0;
    $cptKarate = 0;
    $cptNata = 0;
    while($row = mysqli_fetch_assoc($result)){
        if($row["Football"] == "on") {
            $cptFoot++;
        }
        if($row["Basketball"] == "on") {
            $cptBasket++;
        }
        if($row["Karate"] == "on") {
            $cptKarate++;
        }
        if($row["Natation"] == "on") {
            $cptNata++;
        }
    }
?>
<html>
  <head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_sv.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Sport', 'Nombre etudiants'],
            ['Football', $cptFoot],
            ['Basketball',   $cptBasket],
            ['Karate',  $cptKarate],
            ['Natation',    $cptNata]
        ]);

        var options = {
          title: 'Pie chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    

  </body>
</html>
