<!DOCTYPE html>
<html>
 <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      var my_ex_analytics = <?php echo $my_ex_status; ?>
        
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawMyExternalChart);

          function drawMyExternalChart()
          {
            var my_ex_data = google.visualization.arrayToDataTable(my_ex_analytics);
            var options = {
              title :'',
              titleTextStyle: {color: 'black', fontSize: 14, bold: 600},
              pieHole: 0.3,
              pieSliceTextStyle: {fontSize: 14},
              backgroundColor: 'transparent',
              width: 370,
              height: 220,
              chartArea: {left: 30, right: 10, top: 0, bottom: 0, width: '100%', height: '100%'},
              legend: {position: 'right', textStyle: {color: 'black', fontSize: 13}},
              tooltipTextStyle: {color: 'black', fontSize: 13}
            };
            var chart = new google.visualization.PieChart(document.getElementById('my_ex_donutchart'));
            chart.draw(my_ex_data, options);
          }

    </script>

 </head>
 <body>

  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12" align="center">
      <div id="my_ex_donutchart"></div>
    </div>
  </div>

 </body>
</html>
