<script src="Chart.min.js"></script>

<script>
/*
var legends = [100,200,300,400,500,600,700,800,900,1000];
var values = [860,1140,1060,1060,1070,1110,1330,2210,7830,2478];

setLineChart('myChart','red',legends,values);
*/

function setLineChart(canvas,color,legends,values){
  const xValues = legends;
 return new Chart(canvas, {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: values,
      borderColor: color,
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
}); 
}

function setBarChart(canvas,color,legends,values){
  const xValues = legends;
 return new Chart(canvas, {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{ 
      data: values,
      borderColor: color,
      backgroundColor:color,
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
}); 
}

/*
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

setPieChart('myChart',barColors,xValues,yValues);
*/
function setPieChart(canvas,colors, legends, values){


new Chart(canvas, {
  type: "pie",
  data: {
    labels: legends,
    datasets: [{
      backgroundColor: colors,
      data: values
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
}
</script>