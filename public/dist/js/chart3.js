var _seed = 42;
Math.random = function () {
  _seed = (_seed * 16807) % 2147483647;
  return (_seed - 1) / 2147483646;
};

// function generateSolarProductionData() {
//   var series = [];
//   var currentTime = new Date();

//   // currentTime.setHours(0, 0, 0, 0);

//   while (currentTime <= new Date()) {
//     var y = Math.floor(Math.random() * (30 - 0 + 1)) + 0;
//     y = Math.abs(y);

//     series.push([currentTime.getTime(), y]);
//     currentTime.setTime(currentTime.getTime() + 600099);
//   }

//   return series;
// }



function generateSolarProductionData() {
  var series = [];
  var currentTime = new Date();
  currentTime.setHours(currentTime.getHours() - 3);

  while (currentTime <= new Date()) {
    var y = Math.floor(Math.random() * (500 - 0 + 1)) + 0;
    y = Math.abs(y);

    series.push([currentTime.getTime(), y]);
    currentTime.setTime(currentTime.getTime() + 600000);
  }

  return series;
}


var data = generateSolarProductionData();

var options = {
  series: [{
    data: data
  }],
  chart: {
    id: 'charts',
    type: 'line',
    height: 350,
     toolbar: {
      show: false
    }
  },
  colors: ['#0000FF'],
  stroke: {
    width: 3,
    curve: 'smooth'
  },
  dataLabels: {
    enabled: false
  },
  fill: {
    opacity: 1,
  },
  markers: {
    size: 0
  },
  xaxis: {
    type: 'datetime',
    labels: {
      datetimeFormatter: {
        hour: 'h',
        minute: 'mm',
      },
      format: 'h:mm',
    },
    min: data[0][0],
    max: new Date().getTime(),
  },
  yaxis: {
    min: 0,
    max: 500
  }
};

var chart = new ApexCharts(document.querySelector("#charts"), options);
chart.render();

window.setInterval(function () {
  var newTime = data[data.length - 1][0] + 60000;
  var newY = Math.floor(Math.random() * (30 - 0 + 1)) + 0;
  newY = Math.abs(newY);

  data.push([newTime, newY]);
  data = new Set(data);
  data = Array.from(data);

  chart.updateSeries([{
    data: data
  }]);
}, 1000);
