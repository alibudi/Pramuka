<!-- start: Javascript -->
<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.ui.min.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="<?php echo base_url()?>asset/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/fullcalendar.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.sampledata.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/chart.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/datatables.bootstrap.min.js"></script>


<!-- custom -->
 <script src="<?php echo base_url()?>asset/js/main.js"></script>
 <script type="text/javascript">
  (function(jQuery){

    // start: Chart =============

    Chart.defaults.global.pointHitDetectionRadius = 1;
    Chart.defaults.global.customTooltips = function(tooltip) {

        var tooltipEl = $('#chartjs-tooltip');

        if (!tooltip) {
            tooltipEl.css({
                opacity: 0
            });
            return;
        }

        tooltipEl.removeClass('above below');
        tooltipEl.addClass(tooltip.yAlign);

        var innerHtml = '';
        if (undefined !== tooltip.labels && tooltip.labels.length) {
            for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                innerHtml += [
                    '<div class="chartjs-tooltip-section">',
                    '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                    '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                    '</div>'
                ].join('');
            }
            tooltipEl.html(innerHtml);
        }

        tooltipEl.css({
            opacity: 1,
            left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
            top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
            fontFamily: tooltip.fontFamily,
            fontSize: tooltip.fontSize,
            fontStyle: tooltip.fontStyle
        });
    };
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var lineChartData = {
        labels: ["Siaga", "Penggalang", "Penegak", "Pandega"],
        datasets: [{
            label: "My First dataset",
            fillColor: "rgba(21,186,103,0.4)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(66,69,67,0.3)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
             data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }, {
            label: "My Second dataset",
            fillColor: "rgba(21,113,186,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }]
    };

    var doughnutData = [
            {
                value: 300,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 50,
                color: "#1AD576",
                highlight: "#15BA67",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#0F5E36",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];


    var doughnutData2 = [
            {
                value: 100,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 250,
                color: "#FF6656",
                highlight: "#FF6656",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#FD786A",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];

    var barChartData = {
            labels: ["Islam", "Kristen", "Budha", "Hindu", "Konghuchu"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.4)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(21,186,103,0.2)",
                    highlightStroke: "rgba(21,186,103,0.2)",
                    data: [85, 59, 20, 81, 26, 5, 20]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(21,113,186,0.2)",
                    highlightStroke: "rgba(21,113,186,0.2)",
                    data: [28, 48, 40, 19, 26, 27, 30]
                }
            ]
        };

  var radarData = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };

      var radarData1 = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };
 var lineChartData = {
        labels: ["Siaga", "Penggalang", "Penegak", "Pandega"],
        datasets: [{
            label: "My First dataset",
            fillColor: "rgba(21,186,103,0.4)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(66,69,67,0.3)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
             data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }, {
            label: "My Second dataset",
            fillColor: "rgba(21,113,186,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
        }]
    };

    var doughnutData3 = [
            {
                value: 300,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 50,
                color: "#1AD576",
                highlight: "#15BA67",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#0F5E36",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];


    var doughnutData4 = [
            {
                value: 100,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 250,
                color: "#FF6656",
                highlight: "#FF6656",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#FD786A",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];

    var barChartData1 = {
            labels: ["Islam", "Kristen", "Budha", "Hindu", "Konghuchu"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.4)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(21,186,103,0.2)",
                    highlightStroke: "rgba(21,186,103,0.2)",
                    data: [85, 59, 20, 81, 26, 5, 20]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(21,113,186,0.2)",
                    highlightStroke: "rgba(21,113,186,0.2)",
                    data: [28, 48, 40, 19, 26, 27, 30]
                }
            ]
        };

     window.onload = function(){
            var ctx = $(".doughnut-chart")[0].getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                responsive : true,
                showTooltips: true
            });

            var ctx2 = $(".line-chart")[0].getContext("2d");
            window.myLine = new Chart(ctx2).Line(lineChartData, {
                 responsive: true,
                    showTooltips: true,
                    multiTooltipTemplate: "<%= value %>",
                 maintainAspectRatio: false
            });

            var ctx3 = $(".bar-chart")[0].getContext("2d");
            window.myLine = new Chart(ctx3).Bar(barChartData, {
                 responsive: true,
                    showTooltips: true
            });

            var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
            window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                responsive : true,
                showTooltips: true
            });

             var ctx5 = $(".radar-chart")[0].getContext("2d");
                window.myRadar = new Chart(ctx5).Radar(radarData, {
                    responsive : true,
                    showTooltips: true
                });

            var ctx6 = $(".radar-chart1")[0].getContext("2d");
                window.myRadar = new Chart(ctx6).Radar(radarData1, {
                    responsive : true,
                    showTooltips: true
                });

        };

    //  end:  Chart =============

          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });

   
  })(jQuery);
 </script>
 <!-- custom -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
<!-- end: Javascript -->
</body>
</html>
