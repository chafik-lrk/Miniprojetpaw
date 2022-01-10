<?php
include "header.php";
    include 'config.php';
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    $i = 0;
    $theatre_cpt = 0;
    $musique_cpt = 0;
    $cinema_cpt = 0;
    $poesie_cpt = 0;
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            switch($row["sart"][0]) {
                case 1:
                    $theatre_cpt++;
                case 2:
                    $musique_cpt++;
                case 3:
                    $cinema_cpt++;
                case 4:
                    $poesie_cpt++;
                }
                
        }
    } else {
        echo "no records";
    }     
    mysqli_close($conn);
?>

<?php
     
     $dataPoints = array( 
         array("label"=>"Theatre", "y"=>$theatre_cpt),
         array("label"=>"Musique", "y"=>$musique_cpt),
         array("label"=>"Cinema", "y"=>$cinema_cpt),
         array("label"=>"Poesie", "y"=>$poesie_cpt),
     )
      
     ?>
     <!DOCTYPE HTML>
     <html>
     <head>
    

    <script>
        window.onload = function() {
        
            var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: ""
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        
        

        var chart = new CanvasJS.Chart("chartContainer0", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: ""
            },
            axisY: {
                title: ""
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## tonnes",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        
        }
    </script>
     </head>
     <body>
     <div id="chartContainer" style="height: 370px; width: 100%;"></div>
     <div id="chartContainer0" style="height: 370px; width: 100%;"></div>
     <script src="canvasjs.min.js"></script>
     </body>
     </html>                              