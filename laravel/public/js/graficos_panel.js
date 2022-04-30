var data2 = {
    series: [5, 3, 4]
  };
  
  var sum = function(a, b) { return a + b };
  
  new Chartist.Pie('#chart1', data2, {
    labelInterpolationFnc: function(value) {
      return Math.round(value / data2.series.reduce(sum) * 100) + '%';
    }
  });
  //new Chartist.Line('#chart1', data, options);
//





  var data0 = {
    series: [5, 3, 4]
  };
  
  var sum = function(a, b) { return a + b };
  
  new Chartist.Pie('#chart2', data0, {
    labelInterpolationFnc: function(value) {
      return Math.round(value / data0.series.reduce(sum) * 100) + '%';
    }
  });
  //new Chartist.Line('#chart2', data, options);






  var data = {
    labels: ['Jan', 'Feb', 'Mar'],
      series: [
      [5, 4, 3],
      [3, 2, 9]
    ]
  };
  
  var options = {
    seriesBarDistance: 15
  };
  
  var responsiveOptions = [
    ['screen and (min-width: 641px) and (max-width: 1024px)', {
      seriesBarDistance: 10,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value;
        }
      }
    }],
    ['screen and (max-width: 640px)', {
      seriesBarDistance: 5,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
  ];
  
  new Chartist.Bar('#chart3', data, options, responsiveOptions);






  var data = {
    labels: ['Jan', 'Feb', 'Mar'],
      series: [
      [5, 4, 3],
      [3, 2, 9]
    ]
  };
  
  var options = {
    seriesBarDistance: 15
  };
  
  var responsiveOptions = [
    ['screen and (min-width: 641px) and (max-width: 1024px)', {
      seriesBarDistance: 10,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value;
        }
      }
    }],
    ['screen and (max-width: 640px)', {
      seriesBarDistance: 5,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
  ];
  
  new Chartist.Bar('#chart4', data, options, responsiveOptions);


  