<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
          // Create and populate the data table.
          var data = google.visualization.arrayToDataTable([
            ['ID',  'ნახვები',        'საშუალო ფასი',          'სახეობა',     'გაყიდვები'],
            ['რომანი',         167,              8.66,                   'რომანი',  3373],
            ['თრილერი',      136,               7.84,               'თრილერი',         8190],
            ['პოეზია',         184,                7.6,             'პოეზია',         5523],
            ['ფანტასტიკა',     278,               7.73,               'ფანტასტიკა',    7971],
            ['ისტორიული',     20,               8.05,               'ისტორიული',         6180],
            ['კრიმინალი',      17,               7.49,            'კრიმინალი',    7313],
            ['ბიოგრაფია',     477,               6.09,              'ბიოგრაფია',    3109],
            ['ზღაპარი',       296,               8.55,               'ზღაპარი',    7485],
            ['საშინელება',    154,                6.6,                     'საშინელება',    1418],
            ['ეროტიკა',       205,               7.09,                  'ეროტიკა',  3070]
          ]);
      
          var options = {
            title: '',
            vAxis: {title: 'საშუალო ფასი'},
            hAxis: {title: 'ნახვები'},
            bubble: {textStyle: {fontSize: 11}}
          };
      
          // Create and draw the visualization.
          var chart = new google.visualization.BubbleChart(
              document.getElementById('visualization'));
          chart.draw(data, options);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
	<body style="font-family: Arial;border: 0 none;">
<div class="f_int">ბუშტის ჩარტები</div>
<div class="s_int">
<ul style="list-style-type:none;">
<li><a href="segments">სეგმენტები</a></li>
<li><a href="categories">სახეობები</a></li>
<li><a href="publishers">გამომცემლობები</a></li>
</ul>
</div>
<div class="f_int">გაყიდვები</div>
<div class="s_int">
<ul style="list-style-type:none;">
<li><a href="histogram">ჰისტოგრამები</a></li>
<li><a href="top sales">საუკეთესო გაყიდვები</a></li>
<li><a href="total sales">ჯამური გაყიდვები</a></li>

</ul>
</div>

<div id="visualization" style="width: 800px; height: 400px;"></div>
  </body>
</html>

