<script language="JavaScript">
//    $(document).ready(function() {
//        var chart = {
//            type: 'solidgauge'
//        };
//        var title = null;
//
//        var pane = {
//            center: ['50%', '85%'],
//            size: '140%',
//            startAngle: -90,
//            endAngle: 90,
//            background: {
//                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
//                innerRadius: '60%',
//                outerRadius: '100%',
//                shape: 'arc'
//            }
//        };
//
//        var tooltip = {
//            enabled: false
//        };
//
//        // the value axis
//        var yAxis = {
//            stops: [
//                [0.1, '#55BF3B'], // green
//                [0.5, '#DDDF0D'], // yellow
//                [0.9, '#DF5353'] // red
//            ],
//            lineWidth: 0,
//            minorTickInterval: null,
//            tickPixelInterval: 400,
//            tickWidth: 0,
//            title: {
//                y: -70
//            },
//            labels: {
//                y: 16
//            },
//            min: 0,
//            max: 200,
//            title: {
//                text: 'Speed'
//            }
//        };
//
//        var plotOptions = {
//            solidgauge: {
//                dataLabels: {
//                    y: 5,
//                    borderWidth: 0,
//                    useHTML: true
//                }
//            }
//        };
//
//        var credits = {
//            enabled: false
//        };
//
//        var series = [{
//            name: 'Speed',
//            data: [80],
//            dataLabels: {
//                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
//                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
//                '<span style="font-size:12px;color:silver">km/h</span></div>'
//            },
//            tooltip: {
//                valueSuffix: ' km/h'
//            }
//        }];
//
//        var json = {};
//        json.chart = chart;
//        json.title = title;
//        json.pane = pane;
//        json.tooltip = tooltip;
//        json.yAxis = yAxis;
//        json.credits = credits;
//        json.series = series;
//        $('#container-speed').highcharts(json);
//
//
//        // the value axis
//        yAxis = {
//            stops: [
//                [0.1, '#55BF3B'], // green
//                [0.5, '#DDDF0D'], // yellow
//                [0.9, '#DF5353'] // red
//            ],
//            lineWidth: 0,
//            minorTickInterval: null,
//            tickPixelInterval: 400,
//            tickWidth: 0,
//            title: {
//                y: -70
//            },
//            labels: {
//                y: 16
//            },
//            min: 0,
//            max: 5,
//            title: {
//                text: 'RPM'
//            }
//        };
//
//        series = [{
//            name: 'RPM',
//            data: [1],
//            dataLabels: {
//                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
//                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
//                '<span style="font-size:12px;color:silver">* 1000 / min</span></div>'
//            },
//            tooltip: {
//                valueSuffix: ' revolutions/min'
//            }
//        }];
//
//        json.yAxis = yAxis;
//        json.series = series;
//        $('#container-rpm').highcharts(json);
//
//        var chartFunction = function() {
//            // Speed
//            var chart = $('#container-speed').highcharts();
//            var point;
//            var newVal;
//            var inc;
//
//            if (chart) {
//                point = chart.series[0].points[0];
//                inc = Math.round((Math.random() - 0.5) * 100);
//                newVal = point.y + inc;
//
//                if (newVal < 0 || newVal > 200) {
//                    newVal = point.y - inc;
//                }
//                point.update(newVal);
//            }
//
//            // RPM
//            chart = $('#container-rpm').highcharts();
//            if (chart) {
//                point = chart.series[0].points[0];
//                inc = Math.random() - 0.5;
//                newVal = point.y + inc;
//
//                if (newVal < 0 || newVal > 5) {
//                    newVal = point.y - inc;
//                }
//
//                point.update(newVal);
//            }
//        };
//
//        // Bring life to the dials
//        setInterval(chartFunction, 2000);
//    });
    </script>