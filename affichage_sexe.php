
	 
	 
	<?php
include "header.php";
    include 'config.php';
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    $i = 0;
    $feminin_cpt = 0;
    $masculin_cpt = 0;
   
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            switch($row["ssexe"][0]) {
                case 1:
                    $feminin_cpt++;
                case 2:
                    $masculin_cpt++;
               
                }
                
        }
    } else {
        echo "no records";
    }     
    mysqli_close($conn);
?>

<?php
     
     $dataPoints = array( 
         array("label"=>"feminin", "y"=>$feminin_cpt),
         array("label"=>"masculin", "y"=>$masculin_cpt),
        
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