$(function () {
    $('#graph').highcharts({
		
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
		 plotOptions: {
        	series: {
          	visible: false
          }
        }
	}, function(chart){
      
      console.log(chart);
      var x = 0; // should programmatically get x-position of last point
      var y = 0; // should programmatically get y-position of last point
      var h = 100; // should programmatically get distance between y-position of top and bottom points
      var w = 0;
		chart.series[0].show();
      chart.renderer.image(  x, y, w, h ).add();
	  
    });
	
	
});

