$(function() {
    $.ajax({

        url: 'https://tourscg.com/admin/chart_data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Servicios X Categorias",
                "xAxisName": "Categorias",
                "yAxisName": "Cantidad",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});

$(function() {
    $.ajax({
        url: 'https://tourscg.com/admin/chart_data2.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Sitios X Ubicaciones",
                "centerLabel": "$label: $value",
                "decimals": "0",
                "theme": "fusion"

            };

            apiChart = new FusionCharts({
                type: 'doughnut2d',
                renderAt: 'chart-container2',
                width: '545',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});