// BAR GRAPH
var a = ["Enrolled", "Graduated"];
var b = [30, 40, 10];
var barColors = ["#ff8400", "#5a761d"];

new Chart("barStudent", {
  type: "bar",
  data: {
    labels: a,
    datasets: [
      {
        backgroundColor: barColors,
        data: b,
      },
    ],
  },
  options: {
    legend: { display: false },
  },
});

// PIE STATUS

var xValues = ["Female", "Male"];
var yValues = [50, 40];
var barColors = ["#ff8400", "#5a761d"];
new Chart("pieStatus", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [
      {
        backgroundColor: barColors,
        data: yValues,
      },
    ],
  },
  options: {
    legend: { display: true },
  },
});
