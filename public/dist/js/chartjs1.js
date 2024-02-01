
        var options = {
          series: [{
          name: 'Inflation',
          data: [7.3, 3.1, 4.0, 8.1, 6.0, 5.6, 3.2, 2.3, 1.4, 1.8, 2.5, 3.2,2.3, 3.1, 4.0, 8.1, 6.0, 5.6, 3.2, 2.3, 3.4, 1.8, 8.5, 3.2,2.3, 3.1, 4.0, 8.1, 6.2]
        }],
          chart: {
          height: 450,
          type: 'bar',
          toolbar:false
        },
        plotOptions: {
          bar: {
             columnWidth: '20%',

            borderRadius: 2,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "kwh";
          },

          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },

        xaxis: {
          categories: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
          position: 'bottom',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'Monthly Inflation in Argentina, 2002',
          floating: true,
          offsetY: 450,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        // chart.options('seriesDefaults.barWidth', 10);
        chart.render();


