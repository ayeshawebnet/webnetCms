// charts Home Page 
$('#header-chart-1').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
    type: 'bar',
    height: '25',
    barWidth: '5',
    barSpacing: '3',
    barColor: '#a500ce'
});
$('#header-chart-2').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
    type: 'bar',
    height: '25',
    barWidth: '5',
    barSpacing: '3',
    barColor: '#39a8c6'
});


new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'morris-line-example1a',
    // Chart data records -- each entry in this array corresponds to a point on the chart.
    data: [
    { date: '01-July', views: 120, visitors: 80 },
    { date: '02-July', views: 130, visitors: 90 },
    { date: '03-July', views: 140, visitors: 100 },
    { date: '04-July', views: 150, visitors: 110 },
    { date: '05-July', views: 160, visitors: 120 },
    { date: '06-July', views: 170, visitors: 130 },
    { date: '07-July', views: 180, visitors: 140 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'date',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['views', 'visitors'],
    // Labels for the ykeys -- will be displayed when you hover over the chart.
    labels: ['Views', 'Visitors'],
    // Customize the lines
    lineColors: ['#0b62a4', '#7a92a3'],
    // Customize the point size
    pointSize: 4,
    // Customize the line width
    lineWidth: 2,
    // Enable or disable smooth curves
    smooth: true,
    // Parse dates
    xLabelFormat: function (d) {
    return d.getDate() + '-' + (d.getMonth() + 1) + '-' + d.getFullYear();
    },
    dateFormat: function (d) {
    var date = new Date(d);
    return date.getDate() + '-' + (date.getMonth() + 1) + '-' + date.getFullYear();
    },
    // Customizing the hover effect
    hoverCallback: function (index, options, content, row) {
    return 'Date: ' + row.date + '<br>' +
            'Views: ' + row.views + '<br>' +
            'Visitors: ' + row.visitors;
    }
});


