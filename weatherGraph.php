<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<meta charset="utf-8">

<style>
h1 {
  font-size: 30px;
  }

#high {
  width: 350px;
  height: 200px;
  float: left;
  background-color: #ff6161;
  margin: 5px;
  border-radius: 10px;
  overflow: scroll;
}

#low {
  width: 350px;
  height: 200px;
  float: left;
  background-color: #61a3ff;
  margin: 5px;
  border-radius: 10px;
  overflow: scroll;
}
</style>
<title></title>
</head>
<body>

<div id="chart">
</div>
<script>
var options = {
series: [
{
name: "High - March, 2020",
data: [ ]
},
{
name: "Low - March, 2020",
data: [ ]
}
],
chart: {
height: 350,
type: 'line',
dropShadow: {
enabled: true,
color: '#000',
top: 18,
left: 7,
blur: 10,
opacity: 0.2
},
toolbar: {
show: false
}
},
colors: ['#77B6EA', '#545454'],
dataLabels: {
enabled: true,
},
stroke: {
curve: 'smooth'
},
title: {
text: 'Temperature & Humidity',
align: 'left'
},
grid: {
borderColor: '#e7e7e7',
row: {
colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
opacity: 0.5
},
},
markers: {
size: 1
},
xaxis: {
categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
title: {
text: 'Date'
}
},
yaxis: {
title: {
text: 'Temperature'
},
min: 5,
max: 40
},
legend: {
position: 'top',
horizontalAlign: 'right',
floating: true,
offsetY: -25,
offsetX: -5
}
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

</script>

	<div id="high">
      <h1>High</h1>
      <h1 id="showTotal"></h1>
    </div>
    
    <div id="low">
      <h1>Low</h1>
      <h1 id="showTotal"></h1>
    </div>
    
</body>
</html>
